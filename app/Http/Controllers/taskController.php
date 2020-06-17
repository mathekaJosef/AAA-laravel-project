<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Post::orderby('id', 'asc')->get();

        return view('posts.tasks')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'task' => 'required',
        ]);

        $task = new Post();

        $task->title = $request->title;
        
        $task->save();

        return redirect('/tasks');

    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = Post::find($id);

        $task->delete();

        return redirect('/tasks');


    }

}
