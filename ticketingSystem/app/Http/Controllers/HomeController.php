<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function display()
    {
      $users = DB::select('select * from client_page');
      return view('home',['users'=>$users]);
    }


    public function insert(Request $request){
      $title = $request->input('title');
      $name = $request->input('name');
      $description = $request->input('description');
      $importance = $request->input('importance');
      $date = $request->input('curTime');
      $data=array('title'=>$title, 'name'=>$name, 'description'=>$description, 'importance'=>$importance, 'date'=>$date);
      DB::table('client_page')->insert($data);
      //echo "Ticket created successfully.<br/>";
      //echo '<a href = "/home">Click Here</a> to go back.';
      return redirect('home');
    }

    public function update(Request $request, $id){

      $id = $request->input('Ticket_number');
      $title = $request->input('title1');
      $description = $request->input('description1');
      $importance = $request->input('importance1');

      DB::table('client_page')
            ->where('ticket_number', $id)
            ->update(['title' => $title, 'description' => $description, 'importance' => $importance]);

       return redirect('home');

    }

}
