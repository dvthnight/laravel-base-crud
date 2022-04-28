@extends('layouts.app')

@section('content')

    <main>
        <div class="container">
            <h1>Elenco fumetti</h1>
            <a href="{{route("comics.create")}}">Nuovo fumetto</a>
        </div>
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>

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
                            <td>
                                <form action="{{route("comics.destroy",$comic)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">
                                        elimina
                                    </button>
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </main>

    
    
@endsection