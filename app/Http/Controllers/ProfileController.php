<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Card;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile.Wallet');
    }

    public function edit_profile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email', // Thêm quy tắc email
            'phone_number' => 'required',
            'password' => 'required|min:8', // Thêm quy tắc min với giá trị tối thiểu là 8
        ]);

        // Fetch the user based on the provided user ID
        $user = User::find($request->input('id', 1));

        // Check if the user exists
        if ($user) {
            // Get only the relevant fields for update
            $info = $request->only('name', 'email', 'phone_number', 'password');

            // Update the user information
            $user->update($info);

            // You might want to add a success message here or handle success in some way
            return $this->index()->with('success', 'Profile updated successfully');
        }
        return $this->index();
    }

    public function create_card(Request $request)
    {
        $validationRules = [
            'first_name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'card_number' => 'required|numeric|digits:16',
            'expiration_date' => 'required|date',
            'cvv' => 'required|numeric|digits:3',
            'phone_number' => 'required|numeric|digits:10',
        ];

        // Thực hiện validate nếu cần
        if ($request->validate($validationRules)) {
            // Thêm mã logic xử lý sau khi validate thành công
            $info = $request->only('first_name', 'last_name', 'card_number', 'expiration_date', 'cvv', 'phone_number');
            $info['set_default_card'] = $request->input('set_default_card', '0');
            $card = new Card();
            // dd($info);
            $card->create($info);

            return $this->index()->with('Card_success', 'Card created successfully.');
        }
        return redirect()->back()->with('Card_error', 'User not found.');
    }
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
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
