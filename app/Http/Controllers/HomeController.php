<?php

namespace App\Http\Controllers;

use App\Models\ArchiveModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $archives = ArchiveModel::query()->orderBy('word')->get();
        $data = ['archives' => $archives];
        return view('welcome', $data);
    }


}
