<?php

namespace Modules\Permission\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Permission\App\Models\Permission;

class PermissionController extends Controller
{
    public $data = [];

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware(['permission:permissions.index'])->only('index');
        // $this->middleware(['permission:permissions.show'])->only('show');
        // $this->middleware(['permission:permissions.create'])->only('create', 'store');
        // $this->middleware(['permission:permissions.edit'])->only('edit', 'update');
        // $this->middleware(['permission:permissions.delete'])->only('destroy');
    }

    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index(): Response
    // {
    //     $this->data['title'] = 'permission';
    //     $this->data['permissions'] = Permission::paginate(15);

    //     return response(view('permission::index', $this->data));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $this->data['title'] = 'Create permission';

        return response(view('permission::create', $this->data));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // code

        session(null)->flash('status', 'Record created successfully.');

        return redirect(route('permission.index'));
    }

    /**
     * Show the specified resource.
     */
    public function show(Permission $permission): Response
    {
        $this->data['title'] = $permission->name;

        $this->data['permission'] = $permission;

        return response(view('permission::show', $this->data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission): Response
    {
        $this->data['title'] = '';

        $this->data['permission'] = $permission;

        return response(view('permission::edit', $this->data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission): RedirectResponse
    {
        // code

        session(null)->flash('status', 'Record updated successfully.');

        return redirect(route('permission.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission): RedirectResponse
    {
        // code

        session(null)->flash('status', 'Record deleted successfully.');

        return redirect(route('permission.index'));
    }
}
