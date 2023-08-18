@extends('layouts.base')
@section('title')
    Edit
@endsection
@section('main-content')
    <div class="container">
        <h1 class="text-center my-3">Edit Channel</h1>
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Channel</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('channel.update',['ChannelID'=>$channel->ChannelID])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="ChannelName" class="form-label">Channel Name</label>
                <input type="text" id="ChannelName" name="ChannelName" class="form-control" value="{{$channel->ChannelName}}"
                       required>
            </div>

            <div class="mb-3 col">
                <label for="Description" class="form-label">Description</label>
                <input type="text" id="Description" name=Description class="form-control"
                       value="{{$channel->Description}}" required>
            </div>

            <div class="mb-3 col">
                <label for="SubscribersCount" class="form-label">Subscribers Count</label>
                <input type="number" id="SubscribersCount" name=SubscribersCount class="form-control"
                       value="{{$channel->SubscribersCount}}" required>
            </div>

            <div class="mb-3 col">
                <label for="URL" class="form-label">URL</label>
                <input type="text" id="URL" name=URL class="form-control"
                       value="{{$channel->URL}}" required>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">Edit</button>
                <a class="btn btn-danger" href="{{route('home')}}">Cancel</a></div>


        </form>

    </div>
@endsection
