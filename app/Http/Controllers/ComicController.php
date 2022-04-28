<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title"=>"required|max:100",
            "description"=>"nullable",
            "thumb"=>"required|url",
            "price"=>"required|max:30",
            "series"=>"required|max:100",
            "sale_date"=>"required|max:30",
            "type"=>"required|max:30"
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        $comic->save();   

        return redirect()->route("comics.show",$comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view("comics.show",compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit",compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            "title"=>"required|max:100",
            "description"=>"nullable",
            "thumb"=>"required|url",
            "price"=>"required|max:30",
            "series"=>"required|max:100",
            "sale_date"=>"required|max:30",
            "type"=>"required|max:30"
        ]);
        
        $data = $request->all();
        $comic->update($data);

        return redirect()->route("comics.show",$comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect(route("comics.index"));
    }
}
