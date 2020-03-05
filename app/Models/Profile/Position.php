<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Position extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'formal',
        'internal',
        'internal_leader_name',
    ];

}
