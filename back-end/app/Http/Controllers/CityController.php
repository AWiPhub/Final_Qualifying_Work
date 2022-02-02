<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

use Illuminate\Support\Facades\DB;

class CityController extends Controller {

    public function search(Request $req) {
        $filterColumns = ['id', 'name', 'fullname', 'year', 'description'];

        $pagination = $req['pagination'];
        $filters = $req['filter'];
        $sort = $req['sorted'];

        $query = DB::table('cities')
                    -> offset($pagination['from'])
                    -> limit($pagination['total'])
                    -> orderBy($sort['column'], $sort['type']);

        foreach ($filterColumns as $column) {
            if ($req['filter'][$column]) {
                $param = $req['filter'][$column];
                $query -> where($column, 'like', "%$param%");
            }
        }

        $posts = $query -> get();

        return $posts;
    }

    public function getById(City $id) {
        $city = new City;
        return $city -> where('id', $id -> id) -> get();
        // return $city->get();
    }

    public function create(Request $req) {
        $city = new City();

        $city -> name           = $req -> input('name');
        $city -> fullName       = $req -> input('fullName');
        $city -> year           = $req -> input('year');
        $city -> description    = $req -> input('description');

        if ($req -> hasfile('coat')) {
            foreach($req -> file('coat') as $key => $file) {
                $path = $file -> store('public/citiesCoats');
                $name = $file -> getClientOriginalName();

                $city -> coat       = $path;
            }
        }

        $city -> save();

        return response() -> json($city);
    }

    // public function update(Request $req) {
    //     $city = new City();

    //     return response() -> json($city);
    // }

    public function delete(Request $req) {
        $city = new City;

        $city -> whereIn('id', $req) -> delete();

        return response() -> json($req);
    }
}
