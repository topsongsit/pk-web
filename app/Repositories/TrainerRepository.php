<?php

namespace App\Repositories;

use App\Models\Trainer;
use App\Repositories\BaseRepository;

/**
 * Class TrainerRepository
 * @package App\Repositories
 * @version December 28, 2019, 8:01 am UTC
*/

class TrainerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tname',
        'tdetail',
        'timg',
        'tcategory',
        'tprice'
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
        return Trainer::class;
    }
}
