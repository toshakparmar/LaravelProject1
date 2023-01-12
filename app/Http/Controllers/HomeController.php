<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $User = users::all();
        $data = compact('User');
        return view('home')->with($data);
    }
    public function delete($id){
        echo "<script>alert('User Account is Delete Successfully');</script>";
        $User = users::find($id);
        if(!is_null($User))
        {
            $User->delete();
        }
        return redirect('home');
    }
    
    
}
