<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view("pages/contact");
    }

    public function store(Request $request)
    {
        Storage::put("contact/" . $request["email"] . "-" . random_int(0, 99999), $request["message"]);
        return redirect('/');
    }
}
