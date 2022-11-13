<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\PenerimaDonasi;
use Carbon\Carbon;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.donatur.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list(Request $request)
    {
        $keyword = $request->keyword;
        $datas = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
                ->select('penerima_donasis.*', 'master_districts.name as districts_name')
                ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('master_districts.name', 'LIKE', '%' . $keyword . '%')
                ->sortable()
                ->paginate(3);

        $datas->appends($request->all());

        return view('pages.donatur.penerimadonasi', compact(
            'datas',
            'keyword'
        ));
    }
    
    public function detail($id)
    {
        $data = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
        ->select('penerima_donasis.*', 'master_districts.name as districts_name')
        ->where('penerima_donasis.id', $id)
        ->first();

        return view('pages.donatur.detail', compact(
            'data'
        ));
    }

    public function tambahAnakAsuh(Request $request)
    {
        PenerimaDonasi::where('id', $request->id)->update([
            'donatur_id' => $request->donatur_id,
        ]);
        
        return redirect()->back();
    }

    public function anakAsuh(Request $request)
    {
        $keyword = $request->keyword;
        $donatur_id = Auth::user()->id;
        
        $datas = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
                ->select('penerima_donasis.*', 'master_districts.name as districts_name')
                ->where('penerima_donasis.donatur_id', $donatur_id)
                ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                ->sortable()
                ->paginate(3);;
        
        return view('pages.donatur.anakasuh', compact(
            'datas',
            'keyword'
        ));
    }

    public function anakAsuhDetail($id)
    {
        $data = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
        ->select('penerima_donasis.*', 'master_districts.name as districts_name')
        ->where('penerima_donasis.id', $id)
        ->first();

        return view('pages.donatur.anakasuh-detail', compact(
            'data'
        ));
    }
}
