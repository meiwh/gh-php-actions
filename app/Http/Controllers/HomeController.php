<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Archive\UpdateArchiveRequest;
use App\Models\ArchiveModel;
use App\Models\WordModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $archives = ArchiveModel::query()->limit(1)->get();

        $data = ['archives' => $archives];

        return view('welcome', $data);
    }


}
