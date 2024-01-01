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
            $table->string('registrationNo');
            $table->string('companyMainSector');
            $table->string('primaryMSIC2008');
            $table->string('secondaryMSIC2008');
            $table->string('tertiaryMSIC2008');
            $table->string('natureOfActivity');
            $table->date('financeYearCalendar');
            $table->double('latestRevenue');
            $table->int('latestNoEmployee');
            $table->string('staEcosystem');
            $table->string('productAndService');
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
