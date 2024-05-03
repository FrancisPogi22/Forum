@extends('layouts.app')

@section('content')
    <form action="{{ route('update', $post->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="field-con">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div class="field-con">
            <label for="description">Description</label>
            <textarea name="body" cols="30" rows="10">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
