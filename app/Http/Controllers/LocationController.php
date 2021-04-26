<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Riwayat;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Milon\Barcode\DNS2D;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('location');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => $request['lokasi'],
        );

        Location::create($data);
        return redirect()->route('outloc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Location::where('id_location', $id)->update(array(
            'name' => $request['lokasi'],
        ));

        return redirect()->route('outloc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Riwayat::where('id_riwayat', $id)->delete();
        return redirect('/riwayat');
    }

    public function barcode()
    {
        $data = array(
            'data' => Location::all(),
            'url' => env('APP_URL').'login/',
        );
        return view('printbar', $data);
    }

    public function outloc()
    {
        $data = array(
            'no' => 1,
            'loc' => Location::all(),
        );

        return view('outloc', $data);
    }

    public function createPDF() {
        set_time_limit(300);
        $data = array(
            'data' => Location::all(),
            'url' => env('APP_URL').'login/',
        );

        $pdf = PDF::LoadView('pdf', $data);

        return $pdf->download('invoice.pdf');
    }

    public function hapus($id)
    {
        Location::where('id_location', $id)->delete();

        return redirect()->route('outloc');
    }
}
