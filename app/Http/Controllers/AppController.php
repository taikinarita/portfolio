<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\StorySchedule;

class AppController extends Controller
{
    //
    public function index()
    {
     $new_posts = Story::leftjoin('story_schedules', 'stories.story_id', '=', 'story_schedules.story_id')
        ->leftjoin('app_users', 'app_users.user_id', '=', 'stories.user_id')
        ->select('user_name', 'stories.story_id', 'title', 'type', 'date_first', 'date_last', 'number_of_people', 'main_image', 'order', 'place_name')
        ->limit(3)
        ->orderBy('stories.created_at', 'desc', 'order')
        ->get();

    return view('index', ['new_posts' => $new_posts]);
    }

    public function create1()
    {

    }

    public function store1(){
        
    }
}
