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
            $table->id();
            $table->string('first_name',25);
            $table->string('middle_name',25)->nullable();
            $table->string('last_name',25);
            $table->string('email',60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('previous_password')->nullable();
            $table->dateTime('last_password_update');
            $table->dateTime('last_first_name_update');
            $table->dateTime('Last_middle_name_update');
            $table->dateTime('Last_last_name_update');
            $table->unsignedtinyinteger('no_of_times_first_name_changed')->default('0');
            $table->unsignedtinyinteger('no_of_times_middle_name_changed')->default('0');
            $table->unsignedtinyinteger('no_of_times_first_name_changed')->default('0');
            $table->unsignedsmallInteger('no_of_times_password_changed')->default('0');
            $table->string('Gender',7);
            $table->string('user_country',40);
            $table->string('user_address');
            $table->unsignedbiginteger('mobile_number');
            $table->boolean('email_verification_status')->default(false); //boolean is converted to tinyint(1) which can store number upto 127 
            $table->boolean('account_status')->default(true);
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
