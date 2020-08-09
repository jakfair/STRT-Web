<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Tryptique extends Model
{
    protected $table = "triptyques";
    protected $fillable = ['icone'];
    public $timestamps = false;
}
