<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alpha_comments', function (Blueprint $table) {
            $table->ulid()->primary();

            $table->foreignUlid('alpha_user_uuid')->constrained('alpha_users', 'uuid');

            $table->string('comment')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alpha_comments');
    }
};
