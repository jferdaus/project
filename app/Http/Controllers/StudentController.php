<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studententry;
use App\user;

class StudentController extends Controller
{
    public function index()
    {
    	return view('admin.student.studentEntry');
    }





public function save(Request $request)
{
	$studentEntry = new studententry();




	$request->validate([

'lastname'=>'required',
'firstname'=>'required',
'teachername'=>'required'


	]);

	$studentEntry->lastname = $request->lastname ;

	$studentEntry->firstname = $request->firstname ;

	$studentEntry->teachername = $request->teachername ;

	
	$studentEntry->save();

return redirect('/student/manage')->with('msg', 'successfully inserted data');


}



public function manage()
{


$studentManage = studententry::all();



return view('admin.student.studentManage', ['stuManage'=>$studentManage ]);

}







public function edit($id)

{
	$user = User::all();

	$studentEdit = studententry::where('id', $id)->first();

	return view('admin.student.studentEdit', ['stuEdit'=>$studentEdit, 'user'=>$user]);

}





public function update(Request $request)

{


$update = studententry::find($request->id);

$update->lastname = $request->lastname ;


$update->firstname = $request->firstname ;

$update->teachername = $request->teachername ;


$update->save();

return redirect('/student/manage')->with('edit', 'sucessfully edited.');



}



public function delete($id)

{


$delete = studententry::find($id);


$delete->delete();


return redirect('/student/manage')->with('del', 'Successfully Deleted');


}


public function add()

{

	$user = User::all();

return view('admin.student.studententry', ['user'=>$user]);


}



}
