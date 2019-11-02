<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('picture_url')->nullable();
            $table->text('gender')->nullable();
            $table->timestamp('birthday')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('picture_url');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
        });
    }
}
