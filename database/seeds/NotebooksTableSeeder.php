<?php

use Illuminate\Database\Seeder;

use App\Notebook;

class NotebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notebook::truncate();

        Notebook::create([

        	'name'=>'First Notebook',
        	'user_id'=>1
        	
        	
        	]);
    }
  }
