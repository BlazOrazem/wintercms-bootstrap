<?php namespace Custom\Bootstrap\Bootstrap;

use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;
use Custom\Bootstrap\Models\BlogPostMedia;
use NumenCode\Fundamentals\Bootstrap\ConfigOverride;

class ExtendBlog
{
    public function init()
    {
        $this->extendPostModel();
        $this->extendPostFields();
        $this->extendCategoryColumns();
    }

    protected function extendPostModel()
    {
        Post::extend(function ($post) {
            $post->hasMany['media'] = [BlogPostMedia::class, 'table' => 'custom_bootstrap_blog_post_media'];
            $post->implement[] = 'October.Rain.Database.Behaviors.Purgeable';
            $post->implement[] = 'NumenCode.Fundamentals.Behaviors.RelationableModel';
            $post->addDynamicProperty('relationable', ['media_list' => 'media']);

            $post->addDynamicMethod('getPrimaryPicture', function () use ($post) {
                if (!$post->media_list) {
                    return null;
                }

                return $post->media_list[0];
            });
        });
    }

    protected function extendPostFields()
    {
        ConfigOverride::extendFields(Post::class, function ($config) {
            unset($config['secondaryTabs']['fields']['featured_images']);

            $config['secondaryTabs']['fields'] = array_insert($config['secondaryTabs']['fields'], 'excerpt', [
                'media_list' => [
                    'tab'  => 'numencode.fundamentals::lang.field.media',
                    'type' => 'repeater',
                    'span' => 'auto',
                    'form' => [
                        'fields' => [
                            'id'           => [
                                'label'    => 'numencode.fundamentals::lang.field.id',
                                'type'     => 'number',
                                'span'     => 'full',
                                'cssClass' => 'hidden',
                            ],
                            'title'        => [
                                'label' => 'numencode.fundamentals::lang.field.title',
                                'type'  => 'text',
                                'span'  => 'full',
                            ],
                            'is_published' => [
                                'label'   => 'numencode.fundamentals::lang.field.is_published',
                                'type'    => 'switch',
                                'span'    => 'auto',
                                'default' => true,
                                'comment' => 'numencode.fundamentals::lang.field.is_published_comment',
                            ],
                            'picture'      => [
                                'label' => 'numencode.fundamentals::lang.field.picture',
                                'type'  => 'mediafinder',
                                'span'  => 'auto',
                                'mode'  => 'image',
                            ],
                        ],
                    ],
                ],
            ]);

            return $config;
        });
    }

    protected function extendCategoryColumns()
    {
        ConfigOverride::extendColumns(Category::class, function ($config) {
            $config['columns']['slug'] = [
                'slug' => [
                    'label'      => 'numencode.fundamentals::lang.field.slug',
                    'type'       => 'text',
                    'searchable' => 'true',
                    'sortable'   => 'true',
                ],
            ];

            return $config;
        });
    }
}
