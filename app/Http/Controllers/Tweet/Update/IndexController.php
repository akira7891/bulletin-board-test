<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweetId=(int) $request->route('tweetId');
        $tweet=Tweet::where('id',$tweetId)->first();
        if(is_null($tweet))
        {
            return "存在しない投稿です";
        };
        $data=['tweet'=>$tweet];
        return view('tweet.update',$data);
    }
}
