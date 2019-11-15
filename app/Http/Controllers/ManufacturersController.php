<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class ManufacturersController extends Controller
{
    /**
     * Показва всички фирми в апито
     */
    public function firms_all()
    {
//        $firms = Manufacturer::where('isActive', 0)->get();
        $firms = Manufacturer::all();
        return view('manufacturers.index', compact('firms'));
    }

    public function firms_not()
    {
        $firms = Manufacturer::where('isActive', '!=', 0)->get();
        return view('manufacturers.not_active', compact('firms'));
    }
    ///////////////////////////////////////////////////
    /////////
    public function firms_list()
    {
    //        $firms = Manufacturer::orderBy('alphabet', 'asc')->with('Pesticides')->get()->toArray();
    //        $firms = Manufacturer::all()->where('isActive', 0);
    //        $firms = Manufacturer::all();
    //        return json_encode($firms);

        $firms = Manufacturer::where('isActive', 0)->get();
        return $firms;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \app\Manufacturer
     */
    public function firm_store(Request $request)
    {
        return Manufacturer::create($request->all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return ;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \app\Manufacturer
     */
    public function show($id)
    {
        return Manufacturer::find($id);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function update(Request $request, $id)
    {
	//	dd($request);
        $firm = Manufacturer::findOrFail($id);
        $firm->update($request->all());

        return $firm;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $firm = Manufacturer::findOrFail($id);
//        $firm->delete();

        return 204;
    }
}
