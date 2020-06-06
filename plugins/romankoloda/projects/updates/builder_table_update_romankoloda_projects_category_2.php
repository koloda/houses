<?php namespace Romankoloda\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRomankolodaProjectsCategory2 extends Migration
{
    public function up()
    {
        Schema::table('romankoloda_projects_category', function($table)
        {
            $table->integer('sort_order')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('romankoloda_projects_category', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
