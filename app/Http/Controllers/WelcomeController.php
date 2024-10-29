<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $files = FileUpload::get()->makeHidden('updated_at', 'created_at')->collect();

        return view('pages.welcome', ['files' => $files]);
    }
}
