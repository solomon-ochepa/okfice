<?php

namespace Modules\Tenancy\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Tenancy\App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tenancy::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenancy::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show(string $slug)
    {
        $data = [];
        $data['client'] = Client::whereSlug($slug)->with(['domains', 'user'])->firstOrFail();

        return view('tenancy::show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('tenancy::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
