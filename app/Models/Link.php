<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Link extends Model
{
    use HasFactory;



    protected $fillable = [
        'url',
        'short',
    ];


    public function getRouteKeyName(){
        return 'short';
    }
}
