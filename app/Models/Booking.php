<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Booking
 * @package App\Models
 * @version December 26, 2019, 1:23 pm UTC
 *
 * @property \App\Models\Course course
 * @property \App\Models\Status status
 * @property \App\Models\Trainer trainer
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection tabletimes
 * @property integer user_id
 * @property integer course_id
 * @property integer trainer_id
 * @property integer status_id
 * @property string bmoney_img
 */
class Booking extends Model
{

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'course_id',
        'trainer_id',
        'status_id',
        'bmoney_img'
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
        'trainer_id' => 'integer',
        'status_id' => 'integer',
        'bmoney_img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'trainer_id' => 'required',
        'status_id' => 'required',
        'bmoney_img' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trainer()
    {
        return $this->belongsTo(\App\Models\Trainer::class, 'trainer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tabletimes()
    {
        return $this->hasMany(\App\Models\Tabletime::class, 'booking_id');
    }
}
