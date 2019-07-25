<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('contact');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
            //insert default Admin
        DB::table('users')->insert(
        array(
            'name' => 'ALLAN KIPTALAM',
            'email' => 'allankiptalam54@gmail.com',
            'role' => 'Admin',
            'contact' => '+254716524892',
            'password' => '$2y$10$Isw9uxBLlctKm5VqBbASjuv2joBgEMY59x2NUtKs.5hw.PFyLa/VO',
            'created_at' => '2018-03-19 21:00:00',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
