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
        // 本来、ログイン情報からユーザーIDを拾う、一旦user_id = 1で代用
        $user_id = 1;
        return view('create1', ['user_id' => $user_id]);
    }

    public function store1(Request $request){
        // バリデーション
        // $this->validate($request, Story::$rules);

        $story = new Story;
        $form = $request->all();
        unset($form['_token']);
        $story->fill($form)->save();
        // // 保存して終了を押下したらー＞ひとまずindexへ
        if($form['button'] === 'finish')
        {
            return view('index');
        }
        // // 保存して次のステップへを押下したら
        if ($form['button'] === 'finish')
        {
            $story_id = $form['story_id'];
            return view('/create2', ['story_id' => $story_id]);
        }
    }
}
