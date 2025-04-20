<?php

namespace Modules\User\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Modules\User\App\Http\Requests\CreateUserRequest;
use Modules\User\App\Http\Requests\UpdateUserRequest;
use Modules\User\App\Models\User;

class UserController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('permission:users.index', only: ['index']),
            new Middleware('permission:users.show', only: ['show']),
            new Middleware('permission:users.create', only: ['create', 'store']),
            new Middleware('permission:users.update', only: ['edit', 'update']),
            new Middleware('permission:users.delete', only: ['permanent', 'destroy', 'restore']),
            new Middleware('permission:users.trash', only: ['destroy']),
            new Middleware('permission:users.restore', only: ['restore']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $data['head']['title'] = 'user';

        return response(view('user::index', $data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $data['head']['title'] = 'Create user';

        return response(view('user::create', $data));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        User::create($validated);

        session()->flash('status', 'Record created successfully.');

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        $data['head']['title'] = '';

        $data['user'] = $user;

        return response(view('user::show', $data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        $data['head']['title'] = '';

        $data['user'] = $user;

        return response(view('user::edit', $data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $user = auth()->user();

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        session()->flash('status', 'Record updated successfully.');

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $this->authorize('delete', $user);

        $user->delete();

        session()->flash('status', 'Record deleted successfully.');

        return redirect(route('user.index'));
    }
}
