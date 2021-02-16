@extends('layout2')

@section('content')
    <div id="page" class="container">
    <ul class="style1">
        @foreach ($articles as $article)
            <li class="first">
                <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                <p>{{$article->excerpt}}</p>
            </li>
        @endforeach
    </ul>
    {{ $articles->links() }}
    </div>
@stop
