<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view ('system.setting.index');
    }
    public function ecommerce(){
        return view ('system.setting.ecommerce');
    }
    public function smtp(){
        return view ('system.setting.smtp');  
    }
    public function sysmenu(){
        return view ('system.setting.sysmenu');  
    }
}
