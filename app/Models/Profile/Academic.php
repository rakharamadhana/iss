<?php

namespace App\Models\Profile;

use App\Models\RecordingModel;

/**
 * Class SocialAccount.
 */
class Academic extends RecordingModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'academics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'academic_status',
        'faculty',
        'study_program',
        'year_enrolled',
        'registration_number',
        'pin_number',
        'payment_amount',
        'fund_source',
        'scholarship_status',
        'scholarship_name',
        'scholarship_amount',
    ];

}
