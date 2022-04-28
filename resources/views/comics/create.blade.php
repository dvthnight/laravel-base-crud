@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>Aggiungi nuovo fumetto</h1>
        </div>
        <div class="container">
            <form action="{{route("comics.store")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text" name="title" id="name" value="{{old("title")}}" class="@error('title') is-invalid @enderror form-control"  placeholder="Inserisci il titolo del fumetto">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" class="@error('description') is-invalid @enderror form-control" cols="30" rows="10" placeholder="Inserisci la descrizione del fumetto">
                        {{old("description")}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" name="thumb" id="image" value="{{old("thumb")}}" class="@error('thumb') is-invalid @enderror form-control" placeholder="Inserisci url dell'immagine ">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" value="{{old("price")}}" class="@error('price') is-invalid @enderror form-control" placeholder="Inserisci il prezzo del fumetto">
                </div>
                <div>
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" value="{{old("series")}}" class="@error('series') is-invalid @enderror form-control" placeholder="Inserisci la serie del fumetto">
                </div>
                <div class="form-group">
                    <label for="date">Data</label>
                    <input type="text" name="sale_date" id="date" value="{{old("sale_date")}}" class="@error('sale_date') is-invalid @enderror form-control" placeholder="Inserisci la data del fumetto">
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" name="type" id="type" value="{{old("type")}}" class="@error('type') is-invalid @enderror form-control" placeholder="Inserisci la tipologia">
                </div>
                <button type="submit">
                    Crea
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