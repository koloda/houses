<?php namespace Romankoloda\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRomankolodaProjectsProject extends Migration
{
    public function up()
    {
        Schema::create('romankoloda_projects_project', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('small_image')->nullable();
            $table->string('main_image')->nullable();
            $table->integer('category');
            $table->integer('area')->unsigned();
            $table->integer('rooms')->unsigned();
            $table->integer('floors')->unsigned()->default(1);
            $table->integer('garages')->unsigned()->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('romankoloda_projects_project');
    }
}
