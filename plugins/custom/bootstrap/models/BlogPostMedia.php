<?php namespace Custom\Bootstrap\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

class BlogPostMedia extends Model
{
    use Sortable, Validation;

    public $table = 'custom_bootstrap_blog_post_media';

    public $rules = [
        'title' => 'required',
    ];

    public $fillable = [
        'title',
        'picture',
        'is_published',
        'sort_order',
    ];
}
