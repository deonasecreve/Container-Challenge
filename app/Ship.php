<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ship.
 *
 * @author  The scaffold-interface created at 2017-11-12 03:24:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Ship extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'ships';

	
}
