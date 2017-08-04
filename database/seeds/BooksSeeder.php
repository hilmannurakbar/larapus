<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 =Author::create(['name'=>'Mohamamad Fauzi Adhim']);
        $author2 =Author::create(['name'=>'Salim A fillah']);
        $author3 =Author::create(['name'=>'Aam Amihrudin']);

        //SAMPLE BUKU
        $book1 =Book::create(['title'=>'kupinang engkau dengan hamdalah',
        'amount'=>3,'autohor_id'=>$author1->id]);
        $book2 =Book::create(['title'=>'jalan cinta untuk pejuang',
        'amount'=>2,'autohor_id'=>$author2->id]);
        $book3 =Book::create(['title'=>'membingkai surga dalam rumah tangga',
        'amount'=>4,'autohor_id'=>$author3->id]);
        $book4 =Book::create(['title'=>'cinta &seks rumah tangga muslim',
        'amount'=>3,'autohor_id'=>$author3->id]);
    }
}
