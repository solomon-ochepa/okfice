<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\User\App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function show(User $user): Response
    {
        $data = [];
        $data['title'] = '';

        $data['user'] = $user;

        return response(view('user::profile.show', $data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        $data = [];
        $data['title'] = '';

        $data['user'] = $user;

        return response(view('user::profile.edit', $data));
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
