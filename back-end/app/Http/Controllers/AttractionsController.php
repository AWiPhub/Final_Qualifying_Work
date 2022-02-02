<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attractions;

use App\Http\Controllers\attractionsImagesController;

class AttractionsController extends Controller
{

    public function search(Request $req) {
        return Attractions::all();
    }

    public function getById(Attractions $id) {
        $attraction = new Attractions;
        return $attraction -> where('id', $id -> id) -> get();
    }

    public function create(Request $req) {
        $attraction = new Attractions();

        $attraction -> name           = $req -> input('name');
        $attraction -> description    = $req -> input('description');
        $attraction -> city_id        = $req -> input('city_id');

        $attraction -> save();

        $resultImages = (new attractionsImagesController)->create($attraction -> id, $req);

        return response() -> json($attraction -> id);
    }

    // public function update(Request $req) {
    //     $attraction = new Attractions();

    //     return response() -> json($attraction);
    // }

    public function delete(Request $req) {
        $attraction = new Attractions;

        $attraction -> whereIn('id', $req) -> delete();

        return response() -> json($req);
    }

}
