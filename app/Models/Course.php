<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Course
 * @package App\Models
 * @version December 26, 2019, 12:18 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property string cname
 * @property string cdetail
 * @property string cimg
 * @property integer cprice
 */
class Course extends Model
{

    public $table = 'courses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'cname',
        'cdetail',
        'cimg',
        'cprice',
        'cday'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cname' => 'string',
        'cdetail' => 'string',
        'cimg' => 'string',
        'cprice' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cname' => 'required',
        'cdetail' => 'required',
        'cimg' => 'required',
        'cprice' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'course_id');
    }
}
