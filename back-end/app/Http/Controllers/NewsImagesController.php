<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsImages;

class NewsImagesController extends Controller
{
    public function create($news_id, Request $request) {
        if($request->hasfile('files')) {
            foreach($request->file('files') as $key => $file) {
                $path = $file->store('public/newsImages');
                $name = $file->getClientOriginalName();

                $images = new NewsImages();

                $images -> news_id        = $news_id;
                $images -> filename       = $path;

                $images -> save();
            }
        }
    }
}
