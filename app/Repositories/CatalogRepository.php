<?php

namespace App\Repositories;

use App\Models\Catalog;
use App\Repositories\BaseRepository;

/**
 * Class CatalogRepository
 * @package App\Repositories
 * @version August 3, 2021, 5:32 pm +07
*/

class CatalogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'image',
        'view_type',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'seo_image'
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
        return Catalog::class;
    }
}
