<?php

namespace App\Repositories;

use App\Models\BookingUser;
use App\Repositories\BaseRepository;

/**
 * Class BookingUserRepository
 * @package App\Repositories
 * @version January 16, 2020, 12:03 pm UTC
*/

class BookingUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'status',
        'booking_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BookingUser::class;
    }
}
