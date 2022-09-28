<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryMainPicture extends Model
{
    use HasFactory;
    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'story_main_picture_id';

    protected $guarded = array('story_main_picture_id');

    public function story () 
    {
        return $this->belongsTo('App\Models\Story', 'story_id', 'story_id');
    }
}
