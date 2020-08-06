<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbclassController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('db', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'age' => $request->age,
        ];
        DB::insert('insert into people (id, name, age) values (:id, :name, :age)', $param);
        return redirect('/');
    }
}
