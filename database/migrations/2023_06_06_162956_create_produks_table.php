<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->integer('cat_id');
            $table->string('nama', 222);
            $table->text('deskripsi');
            $table->integer('stock');
            $table->decimal('harga', 65);
            $table->string('ukuran', 12);
            $table->string('foto', 222);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}