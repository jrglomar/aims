<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            // DEFAULT ATTR
            $table->id();
            $table->timestamps();
            // FOR SOFT DELETES
            $table->softDeletes();

            // ADDED ATTR
            $table->string('title')->unique();
            $table->string('desciption')->nullable();

            // RELATIONSHIP ATTR
            $table->foreignId('source_id')->nullable()->constrained('sources')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('inventory_id')->nullable()->constrained('inventories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('condition_id')->nullable()->constrained('conditions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
