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
        Schema::create('personells', function (Blueprint $table) {
            $table->id();
            $table->string('personName');
            $table->string('personPosition')->nullable();
            $table->string('personJobTitle')->nullable();
            $table->string('personDeptDiv')->nullable();
            $table->string('personEmail')->nullable();
            $table->string('personNumber')->nullable();
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
        Schema::dropIfExists('personells');
    }
};
