<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function getPost(){
        $posts = DB::table('posts') -> select('excerpt', 'description') -> get();
        return $posts;
        
        // $posts = DB::table('posts')->where('id', 2)->first();
        // return $posts->description;

        // $posts = DB::table('posts') -> where('id', 2) -> pluck('description');
        // return $posts;

        // $posts = DB::table('posts') -> pluck('title');
        // return $posts;

        // $result = DB::table('posts')->insert([
        //     'title' => 'x',
        //     'slug' => 'x',
        //     'excerpt' => 'If you sign in using your Google account, you can download random data programmatically 
        //                   by saving your schemas and using curl to download data in a shell script via a RESTful url.',

        //     'description' => 'The Password data type now allows you to customize the requirements.
        //                       Added a new Password Hash type that returns the bcrypt hash of a random password.
        //                       Added a new bcrypt(str) function to formulas.',
        //     'is_published' => true,
        //     'min_to_read' => 2
        // ]);
        
        // return $result;

        // $rows = DB::table('posts') -> where('id', 2)
        //         -> update(['excerpt' => 'For example, a company implementing a system uses dummy data to ensure its bookings are stored correctly',
        //         'description' => 'words, dummy data acts as a placeholder for live data, the latter of which testers only introduce once it’s determined that the trail program does not have any unintended, negative impact on the underlying data.']);
        // return $rows;

        // $rows = DB::table('posts') -> where('id', 3) -> delete();
        // return $rows;

        // $count = DB::table('posts') -> count();  //Counts use the number of records.
        // return $count;

        // $sum = DB::table('posts') -> sum('id');  // Calculates the sum of etc
        // return $sum;

        // $avg = DB::table('posts')->avg('id');   //Calculates the average value of a etc.
        // return $avg;

        // $max = DB::table('posts')->max('is_published');  // Retrieves the maximum value of a column
        // return $max;

        // $min = DB::table('posts')->min('id');  //Retrieves the minimum value of a colum
        // return $min;

        // $posts = DB::table('posts') -> whereNot('min_to_read', 'is_published') -> get();
        // return $posts;

        // $posts = DB::table('posts') -> whereBetween('min_to_read', [1, 5]) -> select('title', 'description') -> get();
        // return $posts;
        
        // $rows = DB::table('posts') -> where('id', 3) -> increment('min_to_read');
        // return $rows;

        
    }
}

