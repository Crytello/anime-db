<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::paginate(15);
        return view('anime.index')->withAnimes($animes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        /*$this->validate($request, [
            'name' => 'required',
        ]);*/

        //$validator = Validator::make(Input::all(), $rules);*/

        // process the login
        /*if ($validator->fails()) {
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {*/
        // store
        $anime = new Anime();
        $anime->name     = $request->input('name');
        $anime->quelle   = $request->input('quelle');
        $anime->p_year   = $request->input('year');
        $anime->status   = $request->input('status');
        $anime->studio   = $request->input('studio');
        $anime->folgen_gesamt   = $request->input('folgen_gesamt');
        $anime->folgen_aktuell   = $request->input('folgen_aktuell');
        $anime->favorite = $request->input('favorite');
        $anime->save();

        // redirect
        //Session::flash('message', 'Successfully created nerd!');
        return back();
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anime = Anime::find($id);
        return view('anime.show')->withAnime($anime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anime = Anime::find($id);
        return view('anime.edit')->withAnime($anime);
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
        $anime = Anime::find($id);
        $anime->name     = $request->get('name');
        $anime->quelle   = $request->get('quelle');
        $anime->p_year   = $request->get('year');
        $anime->status   = $request->get('status');
        $anime->studio   = $request->get('studio');
        $anime->folgen_gesamt   = $request->get('folgen_gesamt');
        $anime->folgen_aktuell   = $request->get('folgen_aktuell');
        if($request->get('favorite') == 'on')
        {
            $anime->favorite = 1;
        }
        else{
            $anime->favorite = null;
        }
        $anime->save();

        $animes = Anime::get();

        return redirect()->to('/anime/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $anime = Anime::find($id)->delete();
        return back();

    }
}
