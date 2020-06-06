<?php namespace Romankoloda\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRomankolodaProjectsCategory extends Migration
{
    public function up()
    {
        Schema::table('romankoloda_projects_category', function($table)
        {
            $table->string('slug')->unique();
        });
    }
    
    public function down()
    {
        Schema::table('romankoloda_projects_category', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
