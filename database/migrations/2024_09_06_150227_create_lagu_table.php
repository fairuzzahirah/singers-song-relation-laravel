<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaguTable extends Migration
{
    public function up()
    {
        Schema::create('lagu', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->timestamps();  
            $table->foreignId('penyanyi_id')
            ->constrained('penyanyi')  
            ->onDelete('cascade');  
        });
    }

    public function down()
    {
        Schema::dropIfExists('lagu');
    }
}
