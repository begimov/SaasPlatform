<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }

    public function store(Request $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('account.index');
    }
}
