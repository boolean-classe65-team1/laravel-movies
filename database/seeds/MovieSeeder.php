<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DbMovies = [
            [
                "title"=>"Il Padrino " ,
                "original_title"=>" The Godfather" ,
                "nationality"=>"american",
                "date"=> "1972-03-24",
                "vote"=>"9.2" ,
            ],
            [
                "title"=>"Via col vento " ,
                "original_title"=>" Gone with wind" ,
                "nationality"=>"american",
                "date"=> "1939-12-15",
                "vote"=>"8.6" ,
            ],
            [
                "title"=>"Psycho " ,
                "original_title"=>"Psycho" ,
                "nationality"=>"american",
                "date"=> "1960-06-16",
                "vote"=>"9.4" ,
            ],
            [
                "title"=>"Gravity " ,
                "original_title"=>" Gravity" ,
                "nationality"=>"american/british",
                "date"=> "2013-08-28",
                "vote"=>"7.8" ,
            ],
            [
                "title"=>"Toy Story - Il Mondo Dei Giocattoli " ,
                "original_title"=>" Toy Story" ,
                "nationality"=>"american/british",
                "date"=> "1995-11-19",
                "vote"=>"9.0" ,
            ],
            [
                "title"=>"Pulp fiction " ,
                "original_title"=>" Pulp fiction" ,
                "nationality"=>"american",
                "date"=> "1994-10-14",
                "vote"=>"9.2" ,
            ],
            [
                "title"=>"Forrest Gump " ,
                "original_title"=>" Forrest Gump" ,
                "nationality"=>"american/british",
                "date"=> "1994-06-23",
                "vote"=>"8.8" ,
            ],
            [
                "title"=>"Guerre Stellari " ,
                "original_title"=>" Star Wars" ,
                "nationality"=>"american",
                "date"=> "1977-05-25",
                "vote"=>"10" ,
            ],
            [
                "title"=>"E.T. - L'extra terrestre " ,
                "original_title"=>" E.T. - The Extra Terrestrial" ,
                "nationality"=>"american",
                "date"=> "1982-05-26",
                "vote"=>"7.9" ,
            ],
            [
                "title"=>"Il silenzio degli innocenti" ,
                "original_title"=>"The Silence of the Lambs" ,
                "nationality"=>"american",
                "date"=> "1991-01-30",
                "vote"=>"8.6" ,
            ]
        ];

        foreach($DbMovies as $movie){
            $data = new Movie();

            $data->title = $movie['title'];
            $data->original_title = $movie['original_title'];
            $data->nationality = $movie['nationality'];
            $data->date = $movie['data'];
            $data->vote = $movie['vote'];

            $data->save();

        }
    }
}
