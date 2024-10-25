<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backend extends Controller
{
    public $file;
    public function result(Request $data){
        $this->file = $data->file('uploadinput');
        echo $this->file->getClientOriginalName()."<br><br>";
        echo $this->file->getMimeType()."<br><br>";
        echo $this->file->getPathname()."<br><br>";
        
    }
}
