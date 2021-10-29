<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts= Post::all();    
        //  return view('dashboard')->with('posts',$posts)   ;
    }


    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main= '';
                if ($request->hasFile('main')) {
                    $fileNameWithExt = $request->file('main')->getClientOriginalName();
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('main')->getClientOriginalExtension();
                     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                     $main=$fileNameToStore;
                    $path = $request->file('main')->storeAs('public/postFiles', $fileNameToStore);
        } else {
            $main = 'noimage.jpeg';
        }

            $pic1 ='';
                if ($request->hasFile('pic1')) {
                    $fileNameWithExt = $request->file('pic1')->getClientOriginalName();
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('pic1')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    $pic1=$fileNameToStore;
                    $path = $request->file('pic1')->storeAs('public/postFiles', $fileNameToStore);
                } else {
                    $pic1='noimage.jpeg';
                }
            

        $post=new Post();
        $post->title= $request->input('title');
        $post->description = $request->input('description');
        $post->main = $main;
        $post->pic1 = $pic1;
        $post->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=post::find($id);
        return view('admin.show')->with('post', $post);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('admin.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $main = '';
        if ($request->hasFile('main')) {
            $fileNameWithExt = $request->file('main')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('main')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $main = $fileNameToStore;
            $path = $request->file('main')->storeAs('public/postFiles', $fileNameToStore);
        } else {
            $main = 'noimage.jpeg';
        }

        $pic1 = '';
        if ($request->hasFile('pic1')) {
            $fileNameWithExt = $request->file('pic1')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('pic1')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pic1 = $fileNameToStore;
            $path = $request->file('pic1')->storeAs('public/postFiles', $fileNameToStore);
        } else {
            $pic1 = 'noimage.jpeg';
        }


        $post = post::find($id);
        $post->title = $request->input('title');
        $post->descrption = $request->input('description');
        $post->main = $main;
        $post->pic1 = $pic1;
        $post->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('/dashboard');


    }
}
