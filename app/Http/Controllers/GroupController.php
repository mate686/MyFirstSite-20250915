<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    function list(){
        return view("diakok",["diakok" => Group::csoportlista()]);
    }

    function show($id){
        return view("diak", [
            "diak" => Group::csoportlista(),
            "id" => $id]);
    }
}
