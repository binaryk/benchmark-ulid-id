<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('beta_role_users', function (Blueprint $table) {
            $table->foreignId('beta_role_id')->constrained('beta_roles', 'id')->cascadeOnDelete();
            $table->foreignId('beta_user_id')->constrained('beta_users', 'id')->cascadeOnDelete();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beta_role_users');
    }
};
