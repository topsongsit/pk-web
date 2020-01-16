<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Timetable
 * @package App\Models
 * @version January 16, 2020, 12:20 pm UTC
 *
 * @property \App\Models\Booking booking
 * @property \App\Models\Day day
 * @property \App\Models\Stage stages
 * @property \App\Models\User user
 * @property integer user_id
 * @property integer booking_id
 * @property integer day_id
 * @property integer stages_id
 * @property integer trainer_id
 * @property string date
 */
class Timetable extends Model
{

    public $table = 'tabletimes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'booking_id',
        'day_id',
        'stages_id',
        'trainer_id',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'booking_id' => 'integer',
        'day_id' => 'integer',
        'stages_id' => 'integer',
        'trainer_id' => 'integer',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'user_id' => 'required',
        // 'booking_id' => 'required',
        'day_id' => 'required',
        // 'stages_id' => 'required',
        'trainer_id' => 'required',
        'date' => 'required'
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
    public function day()
    {
        return $this->belongsTo(\App\Models\Day::class, 'day_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function stages()
    {
        return $this->belongsTo(\App\Models\Stage::class, 'stages_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trainer()
    {
        return $this->belongsTo(\App\Models\Trainer::class, 'trainer_id');
    }
}
