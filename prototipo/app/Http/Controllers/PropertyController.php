<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Property;

class PropertyController extends Controller
{
    public function index() {
        // $properties = DB::select('select * from prototipo');
        $properties = Property::all();

        return view('property.index')->with('properties', $properties);
    }

    public function create() {
        return view('property.create');
    }

    public function store(Request $request) {
        $properties = [
            'title' => $request->titulo,
            'description' => $request->descricao,
            'rental_price' => $request->rental_price,
            'real_price' => $request->real_price
        ];

        // DB::insert("INSERT INTO prototipo (title, description, rental_price, real_price) VALUES (?, ?, ?, ?)", $properties);
        
        $property = Property::create($properties);

        return redirect()->action('PropertyController@index');
    }

    public function edit($id) {
        $properties = Property::find($id)->toArray();

        return view('property.edit')->with('properties', $properties );
    }

    public function update(Request $request) {
        $properties = Property::find($request->id);

        $properties->title = $request->titulo;
        $properties->description = $request->descricao;
        $properties->rental_price = $request->rental_price;
        $properties->real_price = $request->real_price;
        
        $properties->save();

        return redirect()->action('PropertyController@index');
    }

    public function remove($id) {
        $property = Property::find($id)->delete();

        return redirect()->action('PropertyController@index');
    }
}
