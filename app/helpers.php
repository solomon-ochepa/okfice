<?php

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Nwidart\Modules\Laravel\Module;

if (! function_exists('module')) {
    /**
     * Retrieves a module status or its instance.
     *
     * @param  string  $name  The name of the module.
     * @param  bool  $instance  Whether to return the module's instance instead of the status. Defaults to false [status].
     * @return bool|Module The module instance or its status.
     */
    function module(string $name, bool $instance = false): bool|Module
    {
        $modules = app('modules');
        if (! $modules->has($name)) {
            Log::error("Module '$name' not found.");

            return false;
        }

        return $instance ? $modules->find($name) : $modules->isEnabled($name);
    }
}

if (! function_exists('user')) {
    function user(): ?Authenticatable
    {
        return Auth::user();
    }
}

if (! function_exists('username')) {
    function username($username): array
    {
        $phonePattern = '/^\+?[1-9]\d{1,14}$/';
        switch ($username) {
            case filter_var($username, FILTER_VALIDATE_EMAIL):
                return ['email' => $username];
                break;

            case preg_match($phonePattern, $username):
                return ['phone' => $username];
                break;

            default:
                return ['username' => $username];
        }
    }
}

if (! function_exists('active')) {
    /**
     * Determine if a route is the active|current request.
     */
    function active(string $route, $string = false): bool|string
    {
        $active = Request::routeIs($route) ? ' active' : '';

        return ($string) ? $active : (bool) $active;
    }
}

if (! function_exists('avatar')) {
    function avatar($name, $base_64 = false)
    {
        $name = urlencode($name);

        // Define the URL for the HTTP request
        $url = "https://ui-avatars.com/api/?name={$name}";

        if (! $base_64) {
            return $url;
        }

        // Define the cache key and the cache expiration time (e.g., 1 hour)
        $cacheKey = Str::slug($name, '_');
        $cacheExpiration = now()->addHour();

        if (request('clear_cache')) {
            Cache::forget($cacheKey);
        }

        // Try to get the base64 string from cache
        $avatarBase64 = Cache::get($cacheKey);

        if (! $avatarBase64) {
            // Make an HTTP request to the URL
            $response = Http::get($url);

            // Check if the response was successful
            if ($response->successful()) {
                // Get the binary data from the response
                $imageData = $response->body();

                // Convert the binary data to a base64 string
                $avatarBase64 = base64_encode($imageData);

                // Cache the base64 string
                Cache::put($cacheKey, $avatarBase64, $cacheExpiration);
            }
        }

        // Return the base64 string
        return $avatarBase64;
    }
}

if (! function_exists('period')) {
    /**
     * Get the dates between two interval.
     */
    function period(string $period, bool $with_time = false): array
    {
        $date = [];
        $date_format = 'Y-m-d';

        switch ($period) {
            default:
            case 'today':
                $date = [today()->format($date_format), today()->format($date_format)];
                break;

            case 'yesterday':
                $date = [now()->yesterday()->format($date_format), now()->yesterday()->format($date_format)];
                break;

            case 'last_7_days':
                $date = [today()->subDays(6)->format($date_format), today()->format($date_format)];
                break;

            case 'week':
                $date = [now()->startOfWeek(0)->format($date_format), now()->endOfWeek(6)->format($date_format)];
                break;

            case 'month':
                $date = [
                    now()->startOfMonth()->format($date_format),
                    now()->endOfMonth()->format($date_format),
                ];
                break;

            case 'quarter':
                $quarter = quarter(now()->month);

                $start = array_column($quarter, 0)[0];
                $end = array_column($quarter, 1)[0];

                $date = [
                    now()->setMonth($start)->startOfMonth()->format($date_format),
                    now()->setMonth($end)->endOfMonth()->format($date_format),
                ];
                break;

            case 'year':
                $date = [
                    now()->startOfYear()->format($date_format),
                    now()->endOfYear()->format($date_format),
                ];
                break;

            case 'date':
                $date = [today()->format($date_format), today()->format($date_format)];
                break;
        }

        return $with_time ? add_time($date) : $date;
    }
}

if (! function_exists('quarter')) {
    /**
     * Get the month's quarter and date interval.
     */
    function quarter(int $month): array
    {
        $quarters = [
            1 => [1, 3],
            2 => [4, 6],
            3 => [7, 9],
            4 => [10, 12],
        ];

        return array_filter($quarters, function ($quarter) use ($month) {
            if ($month >= $quarter[0] and $month <= $quarter[1]) {
                return $quarter;
            }
        });
    }
}

if (! function_exists('add_time')) {
    function add_time(string|array $date): string|array
    {
        $dates = array_map(function ($d, $i) use ($date) {
            $d = new DateTime($d);

            if (is_string($date)) {
                $d->setTime(23, 59, 59);
            } elseif (count($date) > 1 and $i === 0) {
                $d->setTime(0, 0, 0);
            } else {
                $d->setTime(23, 59, 59);
            }

            return $d->format('Y-m-d H:i:s');
        }, $d = (array) $date, array_keys($d));

        return is_array($date) ? $dates : $dates[0];
    }
}

if (! function_exists('k_number_format')) {
    function k_number_format(float $number, int $decimals = 2, ?string $decimal_separator = '.', ?string $thousands_separator = ','): string
    {
        $number = number_format($number, $decimals, $decimal_separator, '');

        if ($number >= $b = 1000000000) {
            $number = number_format($number / $b, 2, $decimal_separator, $thousands_separator);

            return decimal($number, $decimals).' b';
        }
        if ($number >= $m = 1000000) {
            $number = number_format($number / $m, 2, $decimal_separator, $thousands_separator);

            return decimal($number, $decimals).' m';
        }
        if ($number >= $k = 1000) {
            $number = number_format($number / $k, 2, $decimal_separator, $thousands_separator);

            return decimal($number, $decimals).' k';
        }
        $number = number_format($number, 2, $decimal_separator, $thousands_separator);

        return decimal($number, $decimals);
    }
}

if (! function_exists('decimal')) {
    /**
     * number_format decimal correction
     */
    function decimal(float $number, $decimals = 0): string
    {
        return (float) number_format($number, $decimals);
    }
}

if (! function_exists('string')) {
    function string($string)
    {
        return preg_replace('/[^A-Za-z ]/', '', $string);
    }
}

if (! function_exists('urn')) {
    /**
     * Generate a Uniform Resource Name (URN) string.
     *
     * @param  string  $namespace  The namespace of the URN.
     * @param  mixed  $id  The identifier within the namespace.
     */
    function urn(string $namespace, mixed $id): string
    {
        return "urn:{$namespace}:{$id}";
    }
}

if (! function_exists('metadata')) {
    /**
     * Get/Set metadata.
     *
     * ### Examples:
     * - Get all: `metadata($person)`
     * - Get a value: `metadata($person, 'prefix')`
     * - Get list: `metadata($person, ['prefix', 'suffix])`
     * - Set: `metadata($person, ['prefix' => 'Mr'])`
     */
    function metadata(object $model, string|array|null $metadata = null): array|bool
    {
        // Cleanup: remove data with 'null' value
        $metadata = array_filter($metadata, fn ($value, $key) => (strlen(trim($value)) and ! in_array(Str::lower($value), ['', 'null', null])), 1);

        // Get
        if (empty($metadata)) {
            return $model->metadata->pluck('value', 'name')->toArray();
        }
        if (is_string($metadata)) {
            return $model->metadata->where('name', $metadata)->first()->pluck('value', 'name')->toArray();
        }
        if (is_array($metadata) and array_int_keys($metadata)) {
            return $model->metadata->whereIn('name', $metadata)->pluck('value', 'name')->toArray();
        }

        // Set
        foreach ($metadata as $name => $value) {
            is_string($name) ? $model->metadata()->updateOrCreate(['name' => $name], ['value' => $value]) : null;
        }

        return true;
    }
}

if (! function_exists('array_int_keys')) {
    /**
     * Check if all array keys are int.
     */
    function array_int_keys($array)
    {
        $keys = array_keys($array);

        return count($keys) === count(array_filter($keys, 'is_int'));
    }
}
