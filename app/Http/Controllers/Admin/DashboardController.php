<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //aggiungo la funzione del controller
    public function index(){
        return view("admin.dashboard");
    }
}
