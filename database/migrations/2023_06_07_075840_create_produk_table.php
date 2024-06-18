<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * berikut merupakan atribut dari tabel produk yang berisi.... yang memiliki fk 
     * unit_id yang akan terhubung pada pk satuan dan juga....
     */
    public function up(): void
    {

        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->unique();
            $table->string('nama_produk');
            $table->integer('price');
            $table->foreignId('jenis_id')->constrained();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};