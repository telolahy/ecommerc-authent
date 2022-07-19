<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('articles/index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('coucou');
        $categories=Categorie::all();
        return view('articles/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->categorie);
         $request->validate([
             'nom'=>'required',
             'prix'=>'required',
             'image'=>'required',
             'image1'=>'required', 
             'image2'=>'required',
             'size'=>'required',
             'color'=>'required',
            'categorie'=>'required',
         ]);
        $filename=rand().''.$request->image->extension();
        $path=$request->file('image')->storeAs('image',$filename,'public');

        $filename1=time().''.$request->image1->extension();
        $path1=$request->file('image1')->storeAs('image',$filename1,'public');

        $filename2=rand(10000,100000).''.$request->image2->extension();
        $path2=$request->file('image2')->storeAs('image',$filename2,'public');
        // dd($path);
        Article::create([
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'image'=>$path,
            'image1'=>$path1,
            'image2'=>$path2,
            'size'=>$request->size,
            'color'=>$request->color,
            'categorie_id'=>$request->categorie,
        ]);
        return redirect()->route('article.create');
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
        //
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
        //
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
    }
}
