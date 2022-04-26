@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data</th>
            <th>Tipologia</th>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
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
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection