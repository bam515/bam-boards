<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards'; // 테이블 이름
    protected $primaryKey = 'boardID'; // 테이블의 Primary key 컬럼 이름
    public $timestamps = false;
    protected $fillable = ['boardTitle', 'boardContent', 'createdAt', 'updatedAt'];
}
