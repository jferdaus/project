<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\activity ;
use App\user ;

class ActivityController extends Controller
{
   public function index()
    {
    	//return view('admin.activity.activityEntry');



    	$user = User::all();

return view('admin.activity.activityEntry', ['user'=>$user]);

    }







public function save(Request $request)
{
	$activityEntry = new activity();




	$request->validate([

'code'=>'required |unique:activities',
'name'=>'required',
'responsible_person'=>'required'


	]);

	$activityEntry->code = $request->code ;

	$activityEntry->name = $request->name ;
	$activityEntry->start = $request->start ;
	$activityEntry->end = $request->end ;
	$activityEntry->actual_start = $request->actual_start ;
	$activityEntry->actual_end = $request->actual_end  ;
	
	$activityEntry->progress = $request->progress ;

	$activityEntry->details = $request->details ;

	

	$activityEntry->responsible_person = $request->responsible_person ;

	
	$activityEntry->save();

return redirect('/activity/manage')->with('msg', 'successfully inserted data');


}






public function manage()
{


$activityManage = activity::all();



return view('admin.activity.activityManage', ['actManage'=>$activityManage ]);

}







public function edit($id)

{
	$user = User::all();

	$activityEdit = activity::where('id', $id)->first();

	return view('admin.activity.activityEdit', ['actEdit'=>$activityEdit, 'user'=>$user]);

}




public function add()
    {

$user = User::all();

return view('admin.activity.activityEntry', ['user'=>$user]);

    }









public function update(Request $request)

{


$update = activity::find($request->id);

$update->code = $request->code ;


$update->name = $request->name ;

$update->responsible_person = $request->responsible_person ;


$update->save();

return redirect('/activity/manage')->with('edit', 'sucessfully edited.');



}



public function delete($id)

{


$delete = activity::find($id);


$delete->delete();


return redirect('/activity/manage')->with('del', 'Successfully Deleted');


}










}
