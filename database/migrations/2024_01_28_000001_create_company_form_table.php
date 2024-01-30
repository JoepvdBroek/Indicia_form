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

        Schema::create('company_forms', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('legal_structure'); // Normally this would be foreign key to different table holding all options
            $table->string('street_name');
            $table->unsignedInteger('house_number');
            $table->string('postcode');
            $table->string('iban');
            $table->string('email_of_client');
            $table->string('email_of_financial_correspondence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_form');
    }
};
