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
        Schema::table('products', function (Blueprint $table) {

        });

        \Illuminate\Support\Facades\DB::unprepared('
                    CREATE TRIGGER Rating_product_details
                    BEFORE INSERT ON products
                    FOR EACH ROW
                    BEGIN
                        IF NEW.rating < 0 THEN SET NEW.rating = 0;
                        END IF;
                    END
                    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
