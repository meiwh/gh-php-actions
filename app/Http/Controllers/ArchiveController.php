<?php

namespace App\Http\Controllers;

use App\Models\ArchiveModel;
use App\Utils\CommonUtil;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{

    public function index(Request $request)
    {
        $archives = ArchiveModel::query()->limit(1)->orderBy('word')->get();
        $data = ['archives' => $archives];
        return view('archive', $data);
    }


    public function update(Request $request)
    {
        $archiveModel = ArchiveModel::query()->find($request->get('id'));
        if(empty($archiveModel)) {
            CommonUtil::throwBizException("操作错误");
        }
        $archiveModel->title = $request->get('title');
        $archiveModel->content = $request->get('content');
        $archiveModel->author = $request->get('author');
        $archiveModel->dynasty = $request->get('dynasty');
        $archiveModel->appreciation = $request->get('appreciation');
        $updated = $archiveModel->save();
        return ['updated' => $updated];
    }
}
