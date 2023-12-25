<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostsController extends Controller
{
    //
    public function insert()
   {
    // DB::insert('insert into posts(title,body) values(?,?)',['SoftWare Developer','Bahiru is softwaredeveloper']);
    $post=new Post;
    $post->title='New bahiru';
    $post->body='Bahiru sql developer';
    $post->save();
}

public function select()
{
    // $results=DB::select('select * from posts where id=?',[1]);
    $results=Post::all();
 foreach($results as $posts){
echo "title is :".$posts->title;
echo "br";
echo "body is :".$posts->body;
echo "br";
 }
}
public function update()
{
 $updated=DB::update('update posts set title="software tester" where id=?',[1]);
 return $updated;
}
public function find($id)
{
    // $results=DB::select('select * from posts where id=?',[1]);
$post=Post::find($id);

echo $post->title;
echo "br";
echo $post->body;
echo "br";
//  }
}
public function match($title)
{
    // $results=DB::select('select * from posts where id=?',[1]);
$post=Post::where('title','like','%' .$title. '%')->first();return $post;
//  }
}
public function matchShowTitle($title)
{
    // $results=DB::select('select * from posts where id=?',[1]);
$post=Post::where('title','like','%' .$title. '%')->first()->value('title') ;
return $post;
//  }
}
}
