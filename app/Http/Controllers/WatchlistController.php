<?php

namespace App\Http\Controllers;

use App\User;
use App\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('watchlist.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check($userID, $animeID)
    {
        $watchlists = Watchlist::get();

        foreach ($watchlists as $watchlist){
            if($watchlist->user_id == $userID){
                return url('/watchlist/edit/'. $watchlist->id)->withWatchlist($watchlist)->withAnimeID($animeID);
            }
        }
        return url('/watchlist/create')->withUserID($userID);
    }

    public function create($userID){
        $watchlist = new Watchlist();
        $watchlist->user_id = $userID;
        $watchlist->save();

        return view('watchlist.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
