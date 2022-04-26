<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach($comics as $comic){ 
            $comic = new Comic();
            $comic->title = $comic["title"];
            $comic->description = $comic["description"];
            $comic->thumb = $comic["thumb"];
            $comic->price = $comic["price"];
            $comic->series = $comic["series"];
            $comic->sale_date = $comic["sale_date"];
            $comic->type = $comic["type"];
            $comic->save();
        }
    }
}
