<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return Mail::all();
    }
    public function store(Request $request) {}
    public function show(Mail $mail) {}
    public function destroy(Mail $mail) {}
}
