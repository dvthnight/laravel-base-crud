@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>Aggiungi nuovo fumetto</h1>
        </div>
        <div class="container">
            <form action="">
                <div>
                    <label for="name">Titolo</label>
                    <input type="text" name="title" id="name" placeholder="Inserisci il titolo del fumetto">
                </div>
                <div>
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione del fumetto"></textarea>
                </div>
                <div>
                    <label for="image">Immagine</label>
                    <input type="text" name="thumb" id="image" placeholder="Inserisci url dell'immagine ">
                </div>
                <div>
                    <label for="price">Prezzo</label>
                    <input type="text" name="price" id="price" placeholder="Inserisci il prezzo del fumetto">
                </div>
                <div>
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" placeholder="Inserisci la serie del fumetto">
                </div>
                <div>
                    <label for="date">Data</label>
                    <input type="text" name="sale_date" id="date" placeholder="Inserisci la data del fumetto">
                </div>
                <div>
                    <label for="type">Tipologia</label>
                    <input type="text" name="type" id="type" placeholder="Inserisci la tipologia">
                </div>
                <button type="submit">
                    Crea
                </button>
            </form>
        </div>
    </main>
@endsection