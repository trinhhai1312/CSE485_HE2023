<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllChannels()
    {
        $channels = Channel::orderBy('ChannelID','desc')->get();
        return view('home',compact('channels'));
    }
}
