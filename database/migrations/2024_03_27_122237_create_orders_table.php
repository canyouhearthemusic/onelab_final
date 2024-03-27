<?php

use App\Models\Card;
use App\Models\City;
use App\Models\Status;
use App\Models\Warehouse;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Warehouse::class);
            $table->foreignIdFor(City::class);
            $table->foreignIdFor(Card::class);
            $table->unsignedInteger('pieces');
            $table->foreignIdFor(Status::class)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
