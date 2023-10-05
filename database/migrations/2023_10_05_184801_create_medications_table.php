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
        Schema::create('medications', function (Blueprint $table) {
        $table->id();
        $table->string('Medication_Name');
        $table->integer('Stock_Count');
        $table->date('Expiry_Date');
        $table->text('Supplier_Details');
        $table->decimal('Cost_Price', 8, 2);
        $table->decimal('Selling_Price', 8, 2);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
