<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function getPost($id)
    {
        
        $post = DB::table('posts') -> findOrFail($id) -> where('category_id', '=', '$id');
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }

        public static function getSoftDeleted()
        {
            return self::onlyTrashed()->get();
        }

        public function latestPost()
        {
            return $this->hasOne(Post::class)->latestOfMany();
        }


}


