<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveModel extends Model
{
    use HasFactory;

    public $table = 'archive';

    public $timestamps = false;

    protected $fillable = [
        'title',  // 添加 title 字段
        'content',  // 假设 content 字段也允许批量赋值
    ];


}
