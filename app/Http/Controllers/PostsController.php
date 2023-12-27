<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\PostImage;

class PostsController extends Controller
{
    //
    public function insert()
    {
        // DB::insert('insert into posts(title,body) values(?,?)',['SoftWare Developer','Bahiru is softwaredeveloper']);
        $post = new Post;
        $post->title = 'New bahiru';
        $post->body = 'Bahiru sql developer';
        $post->save();
    }

    public function select()
    {
        // $results=DB::select('select * from posts where id=?',[1]);
        $results = Post::all();
        foreach ($results as $posts) {
            echo "title is :" . $posts->title;
            echo "br";
            echo "body is :" . $posts->body;
            echo "br";
        }
    }
    public function update()
    {
        $updated = DB::update('update posts set title="software tester" where id=?', [1]);
        return $updated;
    }
    public function find($id)
    {
        // $results=DB::select('select * from posts where id=?',[1]);
        $post = Post::find($id);

        echo $post->title;
        echo "br";
        echo $post->body;
        echo "br";
        //  }
    }
    public function match($title)
    {
        // $results=DB::select('select * from posts where id=?',[1]);
        $post = Post::where('title', 'like', '%' . $title . '%')->first();
        return $post;
        //  }
    }
    public function matchShowTitle($title)
    {
        // $results=DB::select('select * from posts where id=?',[1]);
        $post = Post::where('title', 'like', '%' . $title . '%')->first()->value('title');
        return $post;
        //  }
    }
    public function insertPostWithPostImage()
    {
        $post = new Post();
        $post->title = 'New Person';
        $post->body = 'QY Anayst';
        $postImage = new PostImage(['name' => 'NewPerson Image', 'url' => '/images/postImages/232.png']);
        $post->save();
        $post->postImage()->save($postImage);
        $post->save();
        return $post;
    }
    function getPostImage($postId)
    {
        return Post::find($postId)->postImage;
    }
    function getPostFromPostImage($postImageId)
    {
        return PostImage::find($postImageId)->post;
    }
    public function insertCommentsForPost()
    {
        $post =Post::with('comments','postImage')->find(3);
        $post->comments()->saveMany([
            new Comment(
                ['commenter'=>'bahiru',
                'comment_body'=>'bahirubody']),
                new Comment(
                    ['commenter'=>'Tsgay',
                    'comment_body'=>'tsgaybody'

                ])
                ]);
                $post->save();
                $post->refresh();
                return $post;
  }
}
