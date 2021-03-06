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
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('username')->nullable();
            $table->json('friend')->nullable();
            $table->json('groups')->nullable();
            $table->string('country')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_blocked')->default(false);
            $table->text('preference')->default('No Bio Add It');
            $table->enum('role', ['user','admin'])->default('user');
            $table->string('avatar')->default('https://media.istockphoto.com/vectors/purple-user-icon-in-the-circle-a-solid-gradient-vector-id1095289632?b=1&k=6&m=1095289632&s=170667a&w=0&h=g0fIdNOkwsl_K3q1MuAHs9krp1nXqLJUxv2_b-zIkIQ=');
            $table->string('background')->default('https://www.pinclipart.com/picdir/middle/377-3777014_add-team-members-with-multi-user-accounts-multi.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }
   
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
