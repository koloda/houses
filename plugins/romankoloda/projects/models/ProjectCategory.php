<?php

namespace Romankoloda\Projects\Models;

use October\Rain\Database\Model;

/**
 * Model
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $small_image
 * @property string $main_image
 * @property string $slug
 * @property Collection $projects
 * @property int $sort_order
 */
class ProjectCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'romankoloda_projects_category';

    public $hasMany = [
        'projects'  => [Project::class, 'key' => 'category_id']
    ];

    protected $slugs = ['slug' => 'title'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function beforeSave()
    {
        if (empty($this->slug)) {
            $this->slug = $this->setSluggedValue('slug', $this->title);
        }
    }

    public $attachOne = [
        'smallImage'    => 'System\Models\File',
        'heroImage'     => 'System\Models\File'
    ];
}
