<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    public function show()
    {/* 
        $phones=Phone::with('user')->get();
        return $phones; */

        $phones=Phone::all();
        
        foreach ($phones as $phone) {
            echo "name of user : ".$phone->user->name." phone : ".$phone->phone."<br>";
        }
    }
}
