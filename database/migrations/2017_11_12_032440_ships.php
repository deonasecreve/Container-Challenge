<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Ships.
 *
 * @author  The scaffold-interface created at 2017-11-12 03:24:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Ships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ships',function (Blueprint $table){

        $table->increments('id');
        
        $table->longText('IMO_nummer');
        
        $table->longText('scheepsnaam');
        
        $table->integer('bouwjaar');
        
        $table->longText('thuishaven');
        
        $table->longText('thuisland');
        
        $table->longText('MMSI_nummer');
        
        $table->integer('lengte');
        
        $table->integer('breedte');
        
        $table->integer('diepte');
        
        $table->integer('draagvermogen');
        
        $table->integer('ruim_lengte');
        
        $table->integer('ruim_breedte');
        
        $table->integer('ruim_hoogte');
        
        $table->integer('max_gevaarlijke_stoffen');
        
        $table->integer('ruim_max_totaal_vloer_belasting');
        
        $table->integer('ruim_max_kolom_vloerblasting');
        
        /**
         * Foreignkeys section
         */
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('ships');
    }
}
