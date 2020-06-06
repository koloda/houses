<?php namespace Romankoloda\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRomankolodaProjectsCategory extends Migration
{
    public function up()
    {
        Schema::create('romankoloda_projects_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250);
            $table->text('description');
            $table->string('small_image')->nullable();
            $table->string('main_image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('romankoloda_projects_category');
    }
}
