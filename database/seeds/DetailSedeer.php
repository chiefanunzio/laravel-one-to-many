<?php

use Illuminate\Database\Seeder;
use App\Detail;
use App\Post;
class DetailSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        

            $posts = Post::all();

            foreach ($posts as $post){
                
                factory(Detail::class, 1) -> make() -> each(function($detail) use($post){

                    $detail -> post_id = $post -> id;   
                    $detail -> save();   
                });
                         
            }
   
          
    }
}
