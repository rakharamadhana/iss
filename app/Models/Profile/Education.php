<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Education extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'level',
        'year_start',
        'year_end',
        'institution',
        'field',
        'average_score',
    ];

}
