<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonInChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_in_charges', function (Blueprint $table) {
            // DEFAULT ATTR
            $table->id();
            $table->timestamps();
            // FOR SOFT DELETES
            $table->softDeletes();

            // ADDED ATTR
            $table->string('name')->nullable();
            
            // RELATIONSHIP ATTR
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_in_charges');
    }
}
