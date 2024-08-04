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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_polisi');
            $table->string('no_mesin');
            $table->enum('merek',['Honda','Yamaha','Suzuki','Kawasaki','Lain']);
            $table->enum('warna',['Putih','Hitam','Hijau','Biru','Merah','Lain']);
            $table->primary(['no_polisi', 'no_mesin']);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
