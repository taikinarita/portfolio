<?php
namespace App\Repositories\App;

use App\Models\AppUser;
use App\Models\Story;
use App\Models\StorySchedule;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class appRepository implements AppRepositoryInterface
{
    // /**
    //  * @var App\Models\Project
    //  */
    // private $project;

    // public function __construct(Project $project) {
    //     $this->project = $project;
    // }

    /**
     * 案件を全件取得する
     *
     * @return Collection
     */
    public function storySumbnailNew3(): Collection
    {
        $stories = new Story();
        return $stories->with('story_schedule')
            ->limit(3)
            ->orderBy('stories.created_at', 'desc', 'order')
            ->get();
    }

}