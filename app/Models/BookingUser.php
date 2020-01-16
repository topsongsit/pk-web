<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class BookingUser
 * @package App\Models
 * @version January 16, 2020, 12:03 pm UTC
 *
 * @property \App\Models\Booking booking
 * @property \App\Models\User user
 * @property integer user_id
 * @property integer course_id
 * @property integer status
 * @property integer booking_id
 */
class BookingUser extends Model
{

    public $table = 'booking_user';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'course_id',
        'status',
        'booking_id',
        'tabletime_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'status' => 'integer',
        'booking_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'status' => 'required',
        'booking_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function booking()
    {
        return $this->belongsTo(\App\Models\Booking::class, 'booking_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }

    public function timetable()
    {
        return $this->belongsTo(\App\Models\Timetable::class, 'tabletime_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
