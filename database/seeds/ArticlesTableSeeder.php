<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article1 = new Article();
        $article1->title = 'Article1';
        $article1->description = 'Description for Article1';
        $article1->created_by = '1';
        $article1->modified_by ='2';
        $article1->save();

        $article2 = new Article();
        $article2->title = 'Article2';
        $article2->description = 'Description for Article2';
        $article2->created_by = '2';
        $article2->modified_by ='3';
        $article2->save();

        $article3 = new Article();
        $article3->title = 'Article3';
        $article3->description = 'Description for Article3';
        $article3->created_by = '3';
        $article3->modified_by ='1';
        $article3->save();

        $article4 = new Article();
        $article4->title = 'Article4';
        $article4->description = 'Description for Article4';
        $article4->created_by = '4';
        $article4->modified_by ='2';
        $article4->save();

        $article5 = new Article();
        $article5->title = 'Article5';
        $article5->description = 'Description for Article5';
        $article5->created_by = '5';
        $article5->modified_by ='3';
        $article5->save();

    }
}
