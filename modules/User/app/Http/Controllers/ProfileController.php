<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\User\App\Models\User;

class ProfileController extends Controller
{
    public $data = [];

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware(['permission:$PLURAL_NAME$.index'])->only('index');
        // $this->middleware(['permission:$PLURAL_NAME$.show'])->only('show');
        // $this->middleware(['permission:$PLURAL_NAME$.create'])->only('create', 'store');
        // $this->middleware(['permission:$PLURAL_NAME$.edit'])->only('edit', 'update');
        // $this->middleware(['permission:$PLURAL_NAME$.delete'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $this->data['title'] = 'user';

        return response(view('user::index', $this->data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $this->data['title'] = 'Create user';

        return response(view('user::create', $this->data));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // code

        session()->flash('status', 'Record created successfully.');

        return redirect(route('user.index'));
    }

    /**
     * Show the specified resource.
     */
    public function show(User $user): Response
    {
        $this->data['title'] = '';

        $this->data['user'] = $user;

        return response(view('user::show', $this->data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        $this->data['title'] = '';

        $this->data['user'] = $user;

        return response(view('user::edit', $this->data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        // code

        session()->flash('status', 'Record updated successfully.');

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        // code

        session()->flash('status', 'Record deleted successfully.');

        return redirect(route('user.index'));
    }
}
