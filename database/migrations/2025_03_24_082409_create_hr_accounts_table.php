<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('hr_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('subscription_type', ['free', 'standard', 'premium'])->default('free');
            $table->boolean('subscription_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hr_accounts');
    }
}
