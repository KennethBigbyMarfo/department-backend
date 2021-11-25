<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Department extends Migration
{
    
   public function up()
   {
       Schema::create('department', function (Blueprint $table) {
           $table->id();
           $table->double('company_id');
           $table->string('code');
           $table->string('department_name');
           $table->string('status');
           $table->string('department_type');
           $table->string('departmant_code');
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
       Schema::dropIfExists('department');
   }
}

