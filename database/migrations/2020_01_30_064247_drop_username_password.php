<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropUsernamePassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('companies', 'username')){
        	Schema::table('companies', function(Blueprint $table){
        		$table->dropColumn('username');
	        });
        };
        if(Schema::hasColumn('companies', 'password')){
        	Schema::table('companies', function(Blueprint $table){
        		$table->dropColumn('password');
	        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
