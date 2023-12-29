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
        Schema::create('associations', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->index()->primary();
            $table->foreign('id')->references('id')->on('organizations')->onDelete('cascade');
            $table->string('registrationNo');
            $table->string('natureOfActivity');
            $table->string('mainCategory');
            $table->string('subCategory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
