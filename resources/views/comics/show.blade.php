@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div class="container">
                <img src="{{$comic->thumb}}" alt="">
                <h1>{{$comic->title}}</h1>
            </div> 
            <div class="container">
                <ul>
                    <li>
                        {{$comic->price}}
                    </li>
                    <li>
                        {{$comic->series}}
                    </li>
                    <li>
                        {{$comic->sale_date}}
                    </li> 
                    <li>
                        {{$comic->type}}
                    </li> 
                </ul>
                <p>
                    {!! $comic->description !!}
                </p>
            </div>
        </section>
    </main>
@endsection