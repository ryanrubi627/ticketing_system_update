<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminPageController extends Controller
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
    public function display()
    {
      $users = DB::select('select * from client_page');
      return view('admin_page',['users'=>$users]);
    }

    public function delete($id){


      DB::table('client_page')->where('ticket_number', $id)->delete();

      return redirect('admin');
    }

}
