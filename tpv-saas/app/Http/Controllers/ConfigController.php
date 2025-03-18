<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function showConfigForm()
    {
        return view('config');
    }

    public function saveConfig(Request $request)
    {
        $user = Auth::user();
        $user->config = json_encode($request->except('_token'));
        $user->save();

        return redirect()->route('home');
    }
}