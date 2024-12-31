<?php

namespace Modules\Media\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Media\App\Models\Media;

class MediaController extends Controller
{
    public $data = [];

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:media.index'])->only('index');
        $this->middleware(['permission:media.show'])->only('show');
        $this->middleware(['permission:media.create'])->only('create', 'store');
        $this->middleware(['permission:media.edit'])->only('edit', 'update');
        $this->middleware(['permission:media.delete'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $this->data['head']['title'] = '';

        return response(view('media::index', $this->data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $this->data['head']['title'] = '';

        return response(view('media::create', $this->data));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        session()->flash('status', 'Record created successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media): Response
    {
        $this->data['head']['title'] = '';

        $this->data['media'] = $media;

        return response(view('media::show', $this->data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media): Response
    {
        $this->data['head']['title'] = '';

        $this->data['media'] = $media;

        return response(view('media::edit', $this->data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media): RedirectResponse
    {
        //
        session()->flash('status', 'Record updated successfully.');

        return redirect(route('media.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media): RedirectResponse
    {
        //
        session()->flash('status', 'Record deleted successfully.');

        return redirect(route('media.index'));
    }
}
