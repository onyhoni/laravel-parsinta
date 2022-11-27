<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;

class StatusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        Status::create([
            'body' => $request->body,
            'identifier' => Str::random(32),
            'user_id' => Auth::id()
        ]);

        return redirect()->back()->with('success', 'Post success update ..');
    }
}
