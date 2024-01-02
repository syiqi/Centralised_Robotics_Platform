<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postCode');
            $table->string('country');
            $table->char('workplaceCategory');
            $table->bigInteger('organizationID')->unsigned();
            $table->foreign('organizationID')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workplaces');
    }
};
