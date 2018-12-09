<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use App\activity ;

use App\user;

use Auth ;

class CustomActivityController extends Controller
{
    





public function manage()
{



$title =  Auth::user()->name ;



$activityManage = activity::where('responsible_person', $title)->get();



return view('admin.custom.activity.customActivityManage', ['actManage'=>$activityManage ]);




}




}
