<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Story extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'story_id';

    protected $guarded = array('story_id');

    // サムネ用情報取得
    public function thumbnail () 
    {
        
    }

    public function app_user () 
    {
        return $this->belongsTo('App\Models\AppUser', 'user_id', 'user_id');
    }

    public function story_main_picture () 
    {
        return $this->hasMany('App\Models\StoryMainPicture', 'story_id', 'story_id');
    }

    public function story_pick_up_memory () 
    {
        return $this->hasMany('App\Models\StoryPickUpMemory', 'story_id', 'story_id');
    }

    public function story_schedule () 
    {
        return $this->hasMany('App\Models\StorySchedule', 'story_id', 'story_id');
    }
}
