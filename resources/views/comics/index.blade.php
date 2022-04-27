@extends('layouts.app')

@section('content')

    <main>
        <div class="container">
            <h1>Elenco fumetti</h1>
        <a href="{{route("comics.create")}}">Nuovo fumetto</a>
        </div>
        <div class="container">
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
                            <td>
                                <a href="{{route("comics.edit",$comic)}}">modifica</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </main>

    
    
@endsection