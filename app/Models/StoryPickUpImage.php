<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryPickUpImage extends Model
{
    use HasFactory;
    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'story_pick_up_image_id';

    protected $guarded = array('story_pick_up_image_id');
}
