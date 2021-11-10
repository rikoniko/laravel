<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
    ];
        
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、paginateで「ページごと」に表示したいアイテム数に制限する
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

