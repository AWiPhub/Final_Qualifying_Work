<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

use App\Http\Controllers\NewsImagesController;

class NewsController extends Controller
{
    public function search(Request $req) {
        return News::all();
    }

    public function getById(News $id) {
        $news = new News;
        return $news -> where('id', $id -> id) -> get();
    }

    public function create(Request $req) {
        $news = new News();

        $news -> title          = $req -> input('title');
        $news -> description    = $req -> input('description');

        $news -> save();

        $resultImages = (new NewsImagesController)->create($news -> id, $req);

        return response() -> json($news -> id);
    }

    // public function update(Request $req) {
    //     $news = new News();

    //     return response() -> json($news);
    // }

    public function delete(Request $req) {
        $news = new News;

        $news -> whereIn('id', $req) -> delete();

        return response() -> json($req);
    }
}
