<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;

class CrudController extends Controller
{
    //
    public function create(Request $request){

        $fName = new crud;        
        // $name = $request->get('first_name');
            $fName->id = $request->get('id');
            $fName->name = $request->get('first_name');
            $fName->last_name = $request->get('last_name');
            $fName->email = $request->get('email');

            $fName->save();
        
    
        
        // for($i = 0; $i <5; $i++){
        //     $names[] = array(
        //         'name'=>'ravi',
        //         'created_at'=>\Carbon\Carbon::now(),
        //         'updated_at'=>\Carbon\Carbon::now());
        // };

        // crud::insert($names);
      

        return redirect('/list')->with('success','Information Added');

    }

public function view(){
    $ViewName = crud::all();   
    return view('list',compact('ViewName'));
}

public function edit($id){
    $editContent = crud::find($id);   
    return view('signupFormEdit',compact('editContent','id'));
}
public function update(Request $request, $id){
    $update =  crud::find($id);
    $update->name = $request->get('first_name');
    $update->last_name = $request->get('last_name');
    $update->email = $request->get('email');
    $update->save();
    return redirect('/list')->with('success','Information Udpated');
}


}
