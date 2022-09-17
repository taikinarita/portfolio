<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorySchedule extends Model
{
    use HasFactory;
    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'story_schedule_id';

    protected $guarded = array('story_schedule_id');
}
