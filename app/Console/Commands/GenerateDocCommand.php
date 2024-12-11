<?php

namespace App\Console\Commands;

use App\Models\ArchiveModel;
use App\Models\WordModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateDocCommand extends Command
{

    protected $signature = 'GenerateDoc';


    protected $description = 'GenerateDoc';


    public function handle()
    {
        $archives = ArchiveModel::query()->limit(1)->get();

        $data = ['archives' => $archives];
        // 渲染视图并获取其内容
        $html = view('welcome', $data)->render();

        // 定义保存路径
        $path = base_path('docs/index.html');

        // 将渲染后的内容写入文件
        File::put($path, $html);
    }

}
