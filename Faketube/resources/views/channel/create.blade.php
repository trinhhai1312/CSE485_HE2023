@extends('layouts.base')
@section('title')
    Create
@endsection
@section('main-content')
    <h1 class="text-center my-3">Add New Voting Event</h1>
    <div class="container">
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

        <form action="{{route('channel.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="ChannelName" class="form-label">Channel Name</label>
                <input type="text" id="ChannelName" name="ChannelName" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="Description" class="form-label">Description</label>
                <textarea type="text"  rows="2" id="Description" name="Description" class="form-control" required></textarea>
            </div>

            <div class="mb-3 col">
                <label for="SubscribersCount" class="form-label">Subscribers Count</label>
                <input type="text" id="SubscribersCount" name="SubscribersCount" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="URL" class="form-label">URL</label>
                <input type="text" id="URL" name="URL" class="form-control" required>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">Create</button>
                <a class="btn btn-danger" href="{{route('home')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
