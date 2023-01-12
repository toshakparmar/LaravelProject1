<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function edit($id){
        $User = users::find($id);
        if(is_null($User)){
            return redirect('home');
        }
        else{
            $data = compact('User');
            return view('edit')->with($data);
        }
    }
    public function update($id,Request $request)
    {
        $User = Users::find($id);
        $User->name = $request['name'];
        $User->email = $request['email'];
        $User->update();
        return redirect('home');
    }
}