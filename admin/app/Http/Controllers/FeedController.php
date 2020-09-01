<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;

class FeedController extends Controller
{
    public function create()
    {
        return view('feed.create');
    }

    public function store(Request $request)
    {
        $feed = new Feed();
        $feed->type = $request->get('type');
        $feed->username = $request->get('username');
        $feed->password = $request->get('password');
        $feed->login = $request->get('login');
        $feed->save();
        return redirect('feeds')->with('success', 'Feed has been successfully added');
    }

    public function index()
    {
        $feeds = Feed::all();
        return view('feed.index',compact('feeds'));
    }
    public function edit($id)
    {
        $feed = Feed::find($id);
        return view('feed.edit',compact('feed','id'));
    }
    public function update(Request $request, $id)
    {
        $feed= Feed::find($id);
        $feed->type = $request->get('type');
        $feed->username = $request->get('username');
        $feed->password = $request->get('password');
        $feed->login = $request->get('login');
        $feed->save();

        return redirect('feeds')->with('success', 'Feed has been successfully update');
    }
    public function destroy($id)
    {
        $feed = Feed::find($id);
        $feed->delete();
        return redirect('feeds')->with('success','Feed has been  deleted');
    }
}
