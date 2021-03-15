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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_plain')->nullable(); // not to be stored for a real app..
            $table->tinyInteger('superadmin')->default(0);
            $table->string('shop_name');
            $table->string('card_brand')->nullable();
            $table->decimal('card_last_four', 4, 0)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->string('shop_domain')->nullable();
            $table->tinyInteger('is_enabled')->default(1);
            $table->enum('billing_plan', [
                'Enterprise',
                'Boutique',
                'Startup',
            ]);
            $table->timestamp('trial_starts_at')->nullable();
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
