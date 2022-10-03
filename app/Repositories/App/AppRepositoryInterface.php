<?php
namespace App\Repositories\App;

use App\Models\AppUser;
use App\Models\Story;
use App\Models\StorySchedule;
use Illuminate\Database\Eloquent\Collection;

interface AppRepositoryInterface
{
    public function storySumbnailNew3(): Collection;
}