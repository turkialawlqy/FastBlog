<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version August 4, 2021, 12:34 am +07
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'image',
        'view_type',
        'content',
        'outline_content',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'seo_image',
        'type'
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
        return Post::class;
    }
}
