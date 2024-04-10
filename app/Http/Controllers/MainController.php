<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChildUser;
use Illuminate\View\View;

class MainController extends Controller
{
    public function dashboard(Request $request)
    {
        $current_user_id = Auth::id();
        $childUsers = ChildUser::where('user_id', $current_user_id)->get();
        return view('dashboard', ['user' => $request->user(), 'childUsers' => $childUsers]);
    }
}
