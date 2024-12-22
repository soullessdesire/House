<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
            $table->text('long_description');
            $table->decimal('price', 10, 2);
            $table->decimal('running_costs', 10, 2);
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->integer('bedrooms');
            $table->timestamp('date_listed')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['Available', 'Rented', 'Unlisted']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
