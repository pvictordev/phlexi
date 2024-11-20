<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        if ($request->hasFile('picture')) {
            $request->validate([
                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            //! Delete the old picture if it exists
            if ($request->user()->picture) {
                Storage::disk('s3')->delete($request->user()->picture);
                // Storage::delete($request->user()->picture);
            }

            //! Store the image in S3 and get the file path
            $filePath = $request->file('picture')->store('public/images', 's3');
            // $filePath = $request->file('picture')->store('public/images');

            Storage::disk('s3')->setVisibility($filePath, 'public');

            //! Generate the full S3 `URL`
            // * fix the error
            $validatedData['picture'] = Storage::disk('s3')->url($filePath);
        }

        //! Fill the user model with validated data
        $request->user()->fill($validatedData);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

     return Redirect::route('dashboard')->with('status', 'profile-updated')->with('success', 'Profile successfully updated.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('success', 'Profile successfully deleted.');
    }
}
