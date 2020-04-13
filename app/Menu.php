<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = "menu";
    protected $primaryKey = 'id_menu';
    protected $fillable = ['nama', 'id_menu','stok' ,'harga','status'];
    public $timestamps = false;
}
