<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Relations\Pivot;

class FollowUser extends Model
{
  protected $table = 'follow_users';
  public $timestamps = false;
  protected $guarded = [];


  public function followUsers()
    {
        return $this->belongsToMany(self::class, 'follow_users', 'user_id', 'followed_user_id')
            ->using(FollowUser::class);
    }



    $users = App\users::where('')
}
