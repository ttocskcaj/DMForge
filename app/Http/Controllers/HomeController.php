<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use FeedManager;
use GetStream\StreamLaravel\Enrich;
use Illuminate\Http\Request;

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
        dd(Auth::user()->friends);
        $enricher = new Enrich();
        $feed = FeedManager::getNewsFeeds(Auth::id())['timeline'];
        $activities = $feed->getActivities()['results'];
        $activities = $enricher->enrichActivities($activities);
        dd($activities);
        return view('home')->with(compact('activities'));
    }
}
