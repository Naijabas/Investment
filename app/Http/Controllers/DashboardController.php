<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $dashboard = Dashboard::all();
        return view('welcome', compact('users', 'dashboard'));
    }
}
