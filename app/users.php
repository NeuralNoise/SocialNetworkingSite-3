<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('username');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

}
