<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T16:43:49+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-07T17:14:49+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $genre = new Genre();
      $genre->name = "Techno";
      $genre->description = "Highly repetitive, instrumentally-oriented music which follows a regular four-on-the-floor beat";
      $genre->save();

      $genre = new Genre();
      $genre->name = "Jungle";
      $genre->description = "Emerging from breakbeat hardcore, the style is characterized by rapid breakbeats, heavily syncopated percussive loops, samples, and synthesized effects, combined with the deep basslines, melodies, and vocal samples found in dub, reggae and dancehall, as well as hip hop and funk";
      $genre->save();

      $genre = new Genre();
      $genre->name = "Electro";
      $genre->description = "genre of electronic music and early hip hop directly influenced by the use of the Roland TR-808 drum machines, and funk";
      $genre->save();

      $genre = new Genre();
      $genre->name = "Deconstructed Club";
      $genre->description = "Experimental electronic dance music genre, characterized as a post-modernist counterpart to house and techno.";
      $genre->save();

      $genre = new Genre();
      $genre->name = "House";
      $genre->description = "House is a genre of electronic dance music characterized by a repetitive four-on-the-floor beat and a tempo of 120 to 130 beats per minute.";
      $genre->save();

      $genre = new Genre();
      $genre->name = "Disco";
      $genre->description = "Four-on-the-floor beats, syncopated basslines, string sections, horns, electric piano, synthesizers, and electric rhythm guitars.";
      $genre->save();

      $genre = new Genre();
      $genre->name = "Hip-Hop";
      $genre->description = "Consists of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted.";
      $genre->save();

    }
}
