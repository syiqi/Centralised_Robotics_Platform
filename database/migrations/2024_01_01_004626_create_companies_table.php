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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->index()->primary();
            $table->foreign('id')->references('id')->on('organizations')->onDelete('cascade');
            $table->string('registrationNo')->nullable();
            $table->string('companyMainSector')->nullable();
            $table->string('primaryMSIC2008')->nullable();
            $table->string('secondaryMSIC2008')->nullable();
            $table->string('tertiaryMSIC2008')->nullable();
            $table->string('natureOfActivity')->nullable();
            $table->date('financeYearCalendar')->nullable();
            $table->double('latestRevenue')->nullable();
            $table->integer('latestNoEmployee')->nullable();
            $table->string('staEcosystem')->nullable();
            $table->string('productAndService')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
