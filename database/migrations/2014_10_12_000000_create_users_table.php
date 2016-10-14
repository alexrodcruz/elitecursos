<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('password');
            $table->integer('isAdm')->default(0);
            $table->integer('isProfessor')->default(0);
            $table->integer('isAluno')->default(0);
            $table->date('expira')->default('2020-01-01');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'Alessandro Rodrigues da Cruz',
                'email' => 'alessandrorodcruz@gmail.com',
                'password' => '$2y$10$3zXnxI.grvhaSwuzdHo8W.1VtuA1MxlC0QZiGvHeX.8gbFJ0pAzmy',
                'isAdm' => 1,
                'isProfessor' => 0,
                'isAluno' => 0,
                'expira' => '2020-01-01',
                'remember_token' => null,
                'created_at' => null,
                'updated_at' => null
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
        Schema::dropIfExists('users');
    }
}
