<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ChannelController extends Controller
{
    public function create()
    {
        return view('channel.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'ChannelName' => "required|max:70",
            'Description' => "required|max:70",
            'SubscribersCount' => "required",
            'URL' => "required|max:500",
        ]);


        if ($validator->fails()) {
            return redirect(route('channel.create'))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $channel = Channel::create($data);
        if ($channel) {
            return redirect(route('home'))->with(['success' => "Them thanh cong"], 200);
        } else {
            return redirect(route('channel.create'))->with(['error' => "Them that bai"], 400);
        }
    }

    public function edit($ChannelID)
    {
        $channel = Channel::where('ChannelID', $ChannelID)->first();
        return view('channel.edit', compact('channel'));
    }

    public function update(Request $request, $ChannelID)
    {
        $data = $request->except(['_token', '_method']);

        $validator = Validator::make($data, [
            'ChannelName' => "required|max:70",
            'Description' => "required|max:70",
            'SubscribersCount' => "required",
            'URL' => "required|max:500",
        ]);

        if ($validator->fails()) {
            return redirect(route('channel.edit',['ChannelID'=>$ChannelID]))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $channel = Channel::where('ChannelID', $ChannelID);
        if ($channel) {
            $channel->update($data);
            return redirect(route('home'))->with(['success' => "Sua thanh cong"], 200);
        } else {
            return redirect(route('channel.edit',['ChannelID'=>$ChannelID]))->with(['error' => "Sua that bai"], 400);
        }
    }

    public function delete($ChannelID)
    {
        try {
            $channel = Channel::where('ChannelID', $ChannelID)->first();
            if ($channel) {
                $channel->delete();
                return redirect(route('home'))->with(['success' => "Xoa thanh cong"], 200);
            } else {
                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
