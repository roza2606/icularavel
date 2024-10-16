<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedController extends Controller
{
    
    public function index() {
        return view('pages.feed.index');
    }

    public function update(Request $request, Feed $feed) {
        $validated_request = $request->validate([
            'title' => 'required | string | max:100',
            'description' => 'required | string[ | max:300',
        ]);
        $feed->update($validated_request);
        return redirect()->route('feeds');
        
       // return redirect()->route('feeds')->with('success', 'Feed updated succesfully');
        
    }

    public function create() {
        
    }

    public function show(Feed $feed) {
        //dd($feed);
        Log::debug("Show feed", ['feed' => $feed]);
        return view('pages.feed.show', compact('feed'));
    }

    public function validate() {
        
    }


}
