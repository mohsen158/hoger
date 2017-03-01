<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Group;
use App\User;
use Illuminate\Http\Request;

use App\Food;
use League\Flysystem\Exception;

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
        $fileName = time() . '' . $request->file('photo')->getClientOriginalName();
        $fileName = str_replace(' ', '_', $fileName);
        $food = new Food;
        $food->name = $request->name;
        //$kala->details=$request->details;
        $food->foodPicName = $fileName;
        $food->save();
        \Storage::disk('foodpic')->put($food->foodPicName, file_get_contents($request->file('photo')->getRealPath()));
        return redirect()->back()->with('message', 'The post successfully inserted.');
    }

    public function getFoods(Request $request)
    {
        $data= Group::with('foods')->get();

        $foods = Food::paginate(12);
        return view('foods', ['data' => $data]);
    }

    public function getfood(Food $food)
    {

        $like = $food->users()->find(\Auth::user()->id);
        if ($like != null) {
            $like = $like->count();
        } else {
            $like = 0;
        }


        return view('food', ['food' => $food, 'like' => $like]);
    }

    public function like(Food $food, User $user)
    {
        $user->foods()->attach($food);
        return back();
    }

    public function dislike(Food $food, User $user)
    {
        $user->foods()->detach($food);
        return back();
    }

    public function addcomment(Request $request)
    {
        $user = $request->user();
        $comment = new Comment();
        $comment->comment=$request->comment;
        //dd($request->comment);
        $user->comments()->save($comment);
        return back();
    }

}
