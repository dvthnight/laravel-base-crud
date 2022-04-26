@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <th>Id</th>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data</th>
            <th>Tipologia</th>
            <th></th>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <td>
                        {{$comic->id}}
                    </td>
                    <td>
                        {{$comic->title}}
                    </td>
                    <td>
                        {{$comic->price}}
                    </td>
                    <td>
                        {{$comic->series}}
                    </td>
                    <td>
                        {{$comic->sale_date}}
                    </td>
                    <td>
                        {{$comic->type}}
                    </td>
                    <td>
                        <a href="{{route("comics.show",$comic)}}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection