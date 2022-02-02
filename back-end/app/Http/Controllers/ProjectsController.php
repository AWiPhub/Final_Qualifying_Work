<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

use App\Http\Controllers\projectsImagesController;

class ProjectsController extends Controller
{
    public function search(Request $req) {
        return Projects::all();
    }

    public function getById(Projects $id) {
        $project = new Projects;
        return $project -> where('id', $id -> id) -> get();
    }

    public function create(Request $req) {
        $project = new Projects();

        $project -> title          = $req -> input('title');
        $project -> description    = $req -> input('description');
        $project -> coordinates    = $req -> input('coordinates');
        $project -> tags           = $req -> input('tags');

        $project -> save();

        $resultImages = (new projectsImagesController)->create($project -> id, $req);

        return response() -> json($project -> id);
    }

    // public function update(Request $req) {
    //     $project = new Projects();

    //     return response() -> json($project);
    // }

    public function delete(Request $req) {
        $project = new Projects;

        $project -> whereIn('id', $req) -> delete();

        return response() -> json($req);
    }
}
