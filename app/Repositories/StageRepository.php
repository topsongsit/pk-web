<?php

namespace App\Repositories;

use App\Models\Stage;
use App\Repositories\BaseRepository;

/**
 * Class StageRepository
 * @package App\Repositories
 * @version December 26, 2019, 1:09 pm UTC
*/

class StageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stname',
        'stdetail',
        'stimg'
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
        return Stage::class;
    }
}
