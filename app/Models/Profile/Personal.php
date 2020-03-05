<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Personal extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'birthplace',
        'birthdate',
        'gender',
        'identity_address',
        'current_address',
        'blood_type',
        'interest',
        'phone_number',
        'emergency_contact_name',
        'emergency_contact_phone_number',
    ];

}
