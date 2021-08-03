<?php

namespace App\Models;

use App\Traits\HasSlug;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Catalog
 * @package App\Models
 * @version August 3, 2021, 5:32 pm +07
 *
 * @property \App\Models\Slug $slug
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $view_type
 * @property integer $seo_title
 * @property string $seo_description
 * @property string $seo_keyword
 * @property string $seo_image
 */
class Catalog extends Model
{
    use SoftDeletes, HasSlug;


    public $table = 'catalogs';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'locale' => 'string',
        'locale_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'view_type' => 'string',
        'seo_title' => 'integer',
        'seo_description' => 'string',
        'seo_keyword' => 'string',
        'seo_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
