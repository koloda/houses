<?php namespace Romankoloda\Projects\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $belongsTo = [
        'category'  => [ProjectCategory::class, 'key' => 'category_id']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'romankoloda_projects_project';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'smallImage'    => 'System\Models\File',
        'heroImage'     => 'System\Models\File'
    ];

    public $attachMany = [
        'mainGallery'       => 'System\Models\File',
        'blueprintsGallery' => 'System\Models\File',
        'facadesGallery'    => 'System\Models\File'
    ];
}
