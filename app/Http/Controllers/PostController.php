<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetch = post::orderBy('created_at','desc')->get();
        return view('post.index',compact('fetch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'size' => 'required',
            'price' => 'required',
            'location' => 'required',
            'contact' => 'required',
        ]);

        $post = new post;
        $post->size = $request->input('size');
        $post->price = $request->input('price');
        $post->location = $request->input('location');
        $post->contact = $request->input('contact');

        $post->save();
        return redirect('/post')->with('success','Record Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post:: edit($id);
        return view(post.edit)->with('post',$post);
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
        $this->validate($request,[
            'size' => 'required',
            'price' => 'required',
            'location' => 'required',
            'contact' => 'required',
        ]);

        $post = post::find($id);
        $post->size = $request->input('size');
        $post->price = $request->input('price');
        $post->location = $request->input('location');
        $post->contact = $request->input('contact');

        $post->save();
        return redirect('/post')->with('success','Record Updated Successfully');
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
        return redirect('/post')->with('succsess','Record deleted successfully');
    }
}
