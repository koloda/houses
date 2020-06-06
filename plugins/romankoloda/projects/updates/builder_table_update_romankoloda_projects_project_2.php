<?php namespace Romankoloda\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRomankolodaProjectsProject2 extends Migration
{
    public function up()
    {
        Schema::table('romankoloda_projects_project', function($table)
        {
            $table->renameColumn('category', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('romankoloda_projects_project', function($table)
        {
            $table->renameColumn('category_id', 'category');
        });
    }
}
