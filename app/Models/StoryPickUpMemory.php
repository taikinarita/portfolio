<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryPickUpMemory extends Model
{
    use HasFactory;
    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'story_pick_up_memory_id';

    protected $guarded = array('story_pick_up_memory_id');

    public function story_pick_up_memory () 
    {
        return $this->belongsTo('App\Models\StoryPickUpMemory', 'story_pick_up_memory_id', 'story_pick_up_memory_id');
    }
}
