<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public static function csoportlista(){

        return[
            "tanulo1" => "Máté",
            "tanulo2" => "Dávid",
            "tanulo3" => "Erik"
        ];
    }
}
