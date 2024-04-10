<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ChildUser;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    /**
     * Handle the form submission to add a new person.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPerson(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);


        $main_user = auth()->user()->id;
        $child_user = new ChildUser();
        $child_user->user_id = $main_user; // This should be $main_user->id, not $main_user
        $child_user->name = $validatedData['name'];
        $child_user->email = $validatedData['email'];
        $child_user->password = bcrypt($validatedData['password']); // Hash the password
        $child_user->save();


        return redirect()->route('dashboard')->with('success', 'Person added successfully!');
    }

    public function show($id)
    {
        $childUser = ChildUser::find($id); // Assuming you have a 'users' table
        if (!$childUser) {
            return response()->json(['error' => 'User not found'], 404);
        }
        return view('child_profile', ['childUser' => $childUser]);
    }
}
