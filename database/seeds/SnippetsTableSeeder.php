<?php

use App\Libraries\Helpers;
use App\Snippet;
use Illuminate\Database\Seeder;

class SnippetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach(Helpers::snippets as $title => $body) {
        Snippet::create([
          'title' => $title,
          'body' => $body
        ]);
      }
    }
}
