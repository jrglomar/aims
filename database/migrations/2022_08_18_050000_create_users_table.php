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
            // DEFAULT ATTR
            $table->id();
            $table->timestamps();
            // FOR SOFT DELETES
            $table->softDeletes();

            // TOKEN
            $table->rememberToken();

            // EMAIL VERIFICATION
            // $table->timestamp('email_verified_at')->nullable();
            
            // ADDED ATTR
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('role')->default('User');

            // RELATIONSHIP ATTR
            // $table->foreignId('role_id')->nullable()->constrained('roles')->onDelete('cascade')->onUpdate('cascade');
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
