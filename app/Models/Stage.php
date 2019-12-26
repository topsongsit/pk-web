<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Stage
 * @package App\Models
 * @version December 26, 2019, 1:09 pm UTC
 *
 * @property string stname
 * @property string stdetail
 * @property string stimg
 */
class Stage extends Model
{

    public $table = 'stages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'stname',
        'stdetail',
        'stimg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'stname' => 'string',
        'stdetail' => 'string',
        'stimg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'stname' => 'required',
        'stdetail' => 'required',
        'stimg' => 'required'
    ];

    
}
