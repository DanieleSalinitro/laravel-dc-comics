<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        //dd($request->query());
            $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //salvataggio e redirezione dell'utente
        $form_data = $request->all();
        //dd($form_data);
        // $new_product = new Product();
        // $new_product->fill($form_data);

        // $new_product->title = $form_data['title'];
        // $new_product->description = $form_data['description'];
        // $new_product->weight = $form_data['weight'];
        // $new_product->type = $form_data['type'];
        // $new_product->cooking_time = $form_data['cooking_time'];
        // $new_product->image = $form_data['image'];

        // $new_product->save();
        $new_product = Comic::create($form_data);
        return redirect()->route('comics.index');
        //return redirect()->route('products.show', $new_product->id);
    }


    /**
     * Display the specified resource.
     *
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $nome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        //
    }
}