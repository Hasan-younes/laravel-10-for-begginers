<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function register()
    {
        return view('admin.auth.register');
    }
    public function store()
    {
    }
}
