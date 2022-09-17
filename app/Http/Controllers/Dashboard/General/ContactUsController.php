<?php

namespace App\Http\Controllers\Dashboard\General;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs = ContactUs::all();

        return view('general.contact-us.index', compact('contactUs'));
    }
}
