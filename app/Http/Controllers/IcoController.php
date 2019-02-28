<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IcoController extends Controller
{
    public function index()
	    {
	    	$ico=DB::raw('select * from ico');
	        return view('icoindex',compact('ico'));
	    }
    public function create()
    {
        return view('icocreate');
    }

    public function store(Request $request)
    {
	   $id = (int)$request->id;
        DB::table('ico')->insert([
            'id' => $id,
            'country' => $request->get('country'),
            'year' => $request->get('year'),
            'month' => $request->get('month'),
            'total_production' => $request->get('total_production'),
            'domestic_consumption' => $request->get('domestic_consumption'),
            'exportable_production' => $request->get('exportable_production'),
            'gross_opening_stocks' => $request->get('gross_opening_stocks'),
        ]);

        return redirect('/')->with('success', 'ICO has been successfully added');
    }

    public function edit(int $id)
    {
        $ico = DB::table('ico')->find($id);
        return view('icoedit',compact('ico','id'));
    }

    public function update(Request $request, $id)
    {

        $id = (int)$request->id;
        $ico = DB::table('ico')->where('id', $id)->delete();
        DB::table('ico')->insert([
            'id' => $id,
            'country' => $request->get('country'),
            'year' => $request->get('year'),
            'month' => $request->get('month'),
            'total_production' => $request->get('total_production'),
            'domestic_consumption' => $request->get('domestic_consumption'),
            'exportable_production' => $request->get('exportable_production'),
            'gross_opening_stocks' => $request->get('gross_opening_stocks'),
        ]);
        
        return redirect('/')->with('success', 'ICO has been successfully update');
    }

    public function destroy(int $id)
    {
        $ico = DB::table('ico')->where('id', $id)->delete();
        return redirect('/')->with('success','ICO has been  deleted');
    }
}
