<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AppUser extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    protected $guarded = array('user_id');

    public function story()
    {
        return $this->hasMany('App\Models\Story', 'user_id', 'user_id');
    }
}
