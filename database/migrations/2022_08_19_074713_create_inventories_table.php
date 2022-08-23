<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            // DEFAULT ATTR
            $table->id();
            $table->timestamps();
            // FOR SOFT DELETES
            $table->softDeletes();

            // ADDED ATTR
            $table->string('title')->nullable();
            $table->string('location');

            // RELATIONSHIP ATTR
            $table->foreignId('person_in_charge_id')->nullable()->constrained('person_in_charges')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('source_id')->nullable()->constrained('sources')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
