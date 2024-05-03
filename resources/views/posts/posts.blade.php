@extends('layouts.app')

@section('content')
    <section id="post">
        <div class="wrapper">
            <div class="post-con">
                <h2>Forum</h2>
                <hr>
                <form action="{{ route('create') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ substr($post->body, 0, 50) }}</td>
                                <td class="btn-con">
                                    <form action="{{ route('edit', $post->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
                                    <form action="{{ route('destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
