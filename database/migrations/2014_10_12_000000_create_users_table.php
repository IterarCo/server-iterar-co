<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('name');
            $table->string('name_first');
            $table->string('name_last');
            $table->string('cc')->unique();
            $table->date('birthday')->nullable();

            $table->string('photo_hd_url');
            $table->string('photo_thumb_url');

            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->enum('rol', ['ADMIN', 'CEO', 'LEADER', 'SENIOR', 'MIDDLE', 'JUNIOR', 'INTERN', 'COSTUMER', 'PROVIDER', 'GUEST']);

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
