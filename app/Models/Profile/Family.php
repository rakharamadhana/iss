<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Family extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'families';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'father_name',
        'father_phone_number',
        'mother_name',
        'mother_phone_number',
        'parent_address',
        'child_number',
        'child_total',
    ];

}
