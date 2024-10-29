<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('pages.console.files.index');
    }

    public function create(Request $request)
    {
        return view('pages.console.files.create');
    }

    public function search(Request $request)
    {
        $files = FileUpload::with('fileCategory')->where('title', 'LIKE', '%' . $request->keyword . '%')->get();

        return view('pages.handle', [
            'files' => $files,
            'prevKeyword' => $request->keyword,
        ]);
    }

    public function show(string $uuid)
    {
        $file = FileUpload::where('uuid', $uuid)->firstOrFail();

        return view('pages.handle.show', compact('file'));
    }
}
