<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('beta_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('beta_user_id')->constrained('beta_users', 'id');

            $table->string('comment')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beta_comments');
    }
};
