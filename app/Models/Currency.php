<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    use HasFactory;
      /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'iso';


       /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    protected $fillable = ['iso'];   // iso is code to represent this currency

}
