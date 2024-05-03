@extends('layouts.app')

@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="field-con">
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div class="field-con">
            <label for="body">Body</label>
            <textarea name="body" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
