<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alpha_role_users', function (Blueprint $table) {
            $table->foreignUlid('alpha_role_uuid')->constrained('alpha_roles', 'uuid')->cascadeOnDelete();
            $table->foreignUlid('alpha_user_uuid')->constrained('alpha_users', 'uuid')->cascadeOnDelete();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alpha_role_users');
    }
};
