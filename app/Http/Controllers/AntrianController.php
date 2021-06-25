<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Layanan;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan=Layanan::all();
        return view('index',compact('layanan'));
    }


    public function cetak_pdf(){
        $antrian = Antrian::whereDate('created_at',Carbon::today())->orderBy('created_at','desc')->first();
        $pdf = PDF::loadview('antrianPdf', ['antrian' => $antrian ]);
//        dd($pdf);
        return $pdf->stream();
        return $pdf->download('antrian-pdf');

//        return view('antrianPdf',compact('antrian'));
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

        $this->data['nama'] = $request->nama;
        $this->data['nama_perusahaan'] = $request->nama_perusahaan;
        $this->data['layanan_id'] = $request->layanan_id;
        $antrianLatestToday = Antrian::whereDate('created_at',Carbon::today())->orderBy('created_at','desc')->first();
        if ($antrianLatestToday==null){
            $lastAntrian=1;
        }else{
            $lastAntrian = $antrianLatestToday->nomor_antrian +1;
        }
        $this->data['nomor_antrian'] =$lastAntrian;
        $antrian = Antrian::create($this->data);
        return redirect(route('antrian.show', $antrian->id))->with(['success' => 'berhasil di ambil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antrian = Antrian::find($id);
        return view('nomorAntrian', compact('antrian'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function edit(Antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antrian $antrian)
    {
        //
    }
}
