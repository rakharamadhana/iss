<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Expertise extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'expertise';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
        'description',
        'duration',
    ];

}
