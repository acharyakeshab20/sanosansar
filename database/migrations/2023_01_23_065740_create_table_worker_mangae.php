<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if (!Schema::hasTable('ManageWork')) {
            Schema::create('MangeWork', function (Blueprint $table) {
                $table->id();
                $table->string('name', '80');
                $table->foreignId('workers_id')->constrained();
                $table->timestamps();
            });
//        }

//        Schema::table('MangeWork', function (Blueprint $table) {
//            $table->foreignId('workers_id')->constrained();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MangeWork');
    }
};
