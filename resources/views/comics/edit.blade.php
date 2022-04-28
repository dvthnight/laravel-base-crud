@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>Aggiungi nuovo fumetto</h1>
        </div>
        <div class="container">
            <form action="{{route("comics.update",$comic)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text" name="title" id="name" value="{{old("title") ? old("title") : $comic->title}}" class="@error('title') is-invalid @enderror form-control" placeholder="Inserisci il titolo del fumetto">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="@error('description') is-invalid @enderror form-control" placeholder="Inserisci la descrizione del fumetto">
                        {{old("description") ? old("description") : $comic->description}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" name="thumb" id="image" value="{{old("thumb") ? old("thumb") : $comic->thumb}}" class="@error('thumb') is-invalid @enderror form-control" placeholder="Inserisci url dell'immagine ">
                </div>
                <div>
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" value="{{old("price") ? old("price") : $comic->price}}" class="@error('price') is-invalid @enderror form-control" placeholder="Inserisci il prezzo del fumetto">
                </div>
                <div class="form-group">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" value="{{old("series") ? old("series") : $comic->series}}" class="@error('series') is-invalid @enderror form-control" placeholder="Inserisci la serie del fumetto">
                </div>
                <div class="form-group">
                    <label for="date" class="form-label">Data</label>
                    <input type="text" name="sale_date" id="date"value="{{old("sale_date") ? old("sale_date") : $comic->sale_date}}" class="@error('sale_date') is-invalid @enderror form-control" placeholder="Inserisci la data del fumetto">
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" name="type" id="type" value="{{old("type") ? old("type") : $comic->type}}" class="@error('type') is-invalid @enderror form-control" placeholder="Inserisci la tipologia">
                </div>
                <button type="submit">
                    Salva
                </button>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </form>
        </div>
    </main>
@endsection