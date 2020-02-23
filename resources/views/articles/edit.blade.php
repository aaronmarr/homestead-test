@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Edit article</h1>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $article->title }}">
                </div>

                <div>
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                </div>

                <div>
                    <label for="body">Body</label>
                    <textarea name="body" id="body">{{ $article->body }}</textarea>
                </div>

                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection