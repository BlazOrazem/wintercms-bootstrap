<?php namespace Custom\Bootstrap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCustomBootstrapBlogPostMedia extends Migration
{
    public function up()
    {
        Schema::create('custom_bootstrap_blog_post_media', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('post_id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('is_published');
            $table->integer('sort_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('custom_bootstrap_blog_post_media');
    }
}
