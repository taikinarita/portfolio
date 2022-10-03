<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\App\AppRepositoryInterface as AppRepository;


class AppController extends Controller
{
    //
    /**
     * @var AppRepository
     */
    private $appRepository;

    public function __construct(AppRepository $appRepository) {
        $this->appRepository = $appRepository;
    }

    public function index()
    {
    $new_posts = $this->appRepository->storySumbnailNew3();
    // $new_posts_story_schedules = $new_posts_stories->story_schedule();

    return view('index', ['new_posts' => $new_posts]);
    // return view('index', ['new_posts_stories' => $new_posts_stories, 'new_posts_story_schedules' => $new_posts_story_schedules]);
    }

    public function create1()
    {
        // 本来、ログイン情報からユーザーIDを拾う、一旦user_id = 1で代用
        $user_id = 1;
        return view('create1', ['user_id' => $user_id]);
    }

    // public function store1(Request $request){
    //     // バリデーション
    //     // $this->validate($request, Story::$rules);

    //     $story = new Story;
    //     $story->user_id = $request->user_id;
    //     $story->title = $request->title;
    //     $story->title = $request->place_name


    //     // INSERT＆DBに登録した旅記録のstory_idを取得
    //     $story_id = $story->save()->insertGetId('');
        
    //     $story_schedule = new StorySchedule;
    //     $story_schedule->title = $request->place_name;


    //     $form = $request->all();
    //     unset($form['_token']);
    //     $story->fill($form)->save();
    //     // 画像を保存
    //     $dir = 'main_image';
    //     $request->file('main_image')->store('public/'.$dir);
    //     // // 保存して終了を押下したらー＞ひとまずindexへ
    //     if($form['button'] === 'finish')
    //     {
    //         return redirect()->route('index');
    //     }
    //     // // 保存して次のステップへを押下したら
    //     if ($form['button'] === 'continue')
    //     {
    //         $story_id = $form['story_id'];
    //         return view('create2', ['story_id' => $story_id]);
    //         return redirect()->route('create2')->with(['story_id' => $story_id]);
    //     }
    // }

    public function create2(Request $request)
    {
        $story_id = $request->session()->get('story_id');
        return view('create2', ['story_id' => $story_id]);
    }

    public function store2(Request $request){
        // バリデーション
        // $this->validate($request, Story::$rules);

        $story = Story::find($request->story_id);
        $form = $request->all();
        unset($form['_token']);
        $story->fill($form)->save();
        // // 保存して終了を押下したらー＞ひとまずindexへ
        if($form['button'] === 'finish')
        {
            return redirect()->route('index');
        }
        // // 公開するを押下したら
        if ($form['button'] === 'public')
        {   $public_status = ['public_status' => 1];
            $story->fill($form)->save();
            return redirect()->route('create_complete');
        }
    }

    public function create_complete()
    {
        return view('create_complete');
    }
}
