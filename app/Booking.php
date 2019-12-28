<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id','course_id','trainer_id','status_id','bmoney_img'];
}
