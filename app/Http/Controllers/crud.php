<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crud extends Controller
{
public function ShowData(){

    $select = DB::table('student')->get();



    return view('home',compact('select'));
}

public function insert(Request $req){
    $insert = DB::table('student')->insert([
          
        'name'=>$req->name,
        'email'=>$req->email,
        'dept'=>$req->dept
    ]);

    if($insert){

        return redirect('/');

    }else{
        echo "data insert failed";
    }
}

public function delete($id){

    $delete = DB::table('student')->where('id',$id)->delete();

    if($delete){

        return redirect('/');

    }else{
        echo "data delete failed";
    }

}
public function edit($id){

    $select =DB::table('student')->where('id',$id)->first();

    
    return view('edit',compact('select'));
}

public function update(Request $req,$id){

    $update = DB::table('student')->where('id',$id)->update([
          
        'name'=>$req->name,
        'email'=>$req->email,
        'dept'=>$req->dept

    ]);
    if($update){

        return redirect('/');

    }else{
        echo "data update failed";
    }

}
}
