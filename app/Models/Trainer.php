<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Trainer
 * @package App\Models
 * @version December 28, 2019, 8:01 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property string tname
 * @property string tdetail
 * @property string timg
 * @property string tcategory
 * @property integer tprice
 */
class Trainer extends Model
{

    public $table = 'trainers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'tname',
        'tdetail',
        'timg',
        'tcategory',
        'tprice'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tname' => 'string',
        'tdetail' => 'string',
        'timg' => 'string',
        'tcategory' => 'string',
        'tprice' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tname' => 'required',
        'tdetail' => 'required',
        'timg' => 'required',
        'tcategory' => 'required',
        'tprice' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'trainer_id');
    }
}
