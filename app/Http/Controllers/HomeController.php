<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Food;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //function for adding foods with their pictures in admin page
    //Test: ??
    public function addFoodPost(Request $request)
    {
          $file = $request->file('photo');
          $fileName = time().''.$request->file('photo')->getClientOriginalName();
          $fileName = str_replace(' ', '_', $fileName);
          $food = new Food;
          $food->name = $request->name;
          //$kala->details=$request->details;
          $food->foodPicName = $fileName;
          $food->save();
          \Storage::disk('foodpic')->put($food->foodPicName,file_get_contents($request->file('photo')->getRealPath()));
          return redirect()->back()->with('message', 'The post successfully inserted.');
    }

    public function getFoods(Request $request){
        $foods = Food::paginate(12);
        return view('foods', ['foods' => $foods]);
    }

    public function addcomment(Request $request){
        $user = $request->user();
        $comment = new Comment($request->comment);
        //dd($request->comment);
        $user->comments()->save($comment);
    }

}
