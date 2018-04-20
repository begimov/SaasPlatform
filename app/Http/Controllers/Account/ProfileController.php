<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('account.profile.index');
    }

    public function store(Request $request)
    {
        $request->user()->update($request->only('name', 'email'));

        return back();
    }
}
