<?php

namespace App\Repositories;

use App\Models\Timetable;
use App\Repositories\BaseRepository;

/**
 * Class TimetableRepository
 * @package App\Repositories
 * @version January 16, 2020, 12:20 pm UTC
*/

class TimetableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'booking_id',
        'day_id',
        'stages_id',
        'trainer_id',
        'date'
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
        return Timetable::class;
    }
}
