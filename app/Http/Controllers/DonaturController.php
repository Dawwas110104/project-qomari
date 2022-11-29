<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Auth;
use Illuminate\Http\Request;
use App\Models\PenerimaDonasi;
use App\Models\transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use PharIo\Manifest\Author;

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
                ->whereNull('penerima_donasis.donatur_id')
                ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                ->where('master_districts.name', 'LIKE', '%' . $keyword . '%')
                ->sortable()
                ->paginate(3);

        // return dd($datas);

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
        
        return redirect()->route('donatur.anak-asuh');
    }

    public function anakAsuh(Request $request)
    {
        $keyword = $request->keyword;
        $donatur_id = FacadesAuth::user()->id;
        
        $datas = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
                ->select('penerima_donasis.*', 'master_districts.name as districts_name')
                ->where('penerima_donasis.donatur_id', $donatur_id)
                ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                ->sortable()
                ->paginate(3);
        
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

        $transaksis = transaksi::where('pd_id', $id)->get();

        return view('pages.donatur.anakasuh-detail', compact(
            'data',
            'transaksis'
        ));
    }

    public function transaksi(Request $request)
    {
        $keyword = $request->keyword;
        $transaksis = transaksi::join('penerima_donasis', 'pd_id', '=', 'penerima_donasis.id')
                    ->select('transaksis.*', 'penerima_donasis.name as name')
                    ->where('transaksis.donatur_id', FacadesAuth::user()->id)
                    ->where('name', 'LIKE', '%' . $keyword . '%')
                    ->where('bulan', 'LIKE', '%' . $keyword . '%')
                    ->sortable()
                    ->paginate(3);

        return view('pages.donatur.transaksi.transaksi', compact(
            [
                'transaksis',
                'keyword'
            ]
        ));
    }

    public function transaksiDetail($id)
    {
        $data = transaksi::where('transaksis.id', $id)
                ->join('users', 'transaksis.donatur_id', '=', 'users.id')
                ->join('penerima_donasis', 'transaksis.pd_id', '=', 'penerima_donasis.id')
                ->select('transaksis.*', 'users.name as nama_donatur', 'penerima_donasis.name as nama_penerimadonasi')
                ->first();

        return view('pages.donatur.transaksi.detail', compact(
            [
                'data',

            ]
        ));
    }

    public function upload($id, Request $request)
    {
        $file = $request->file('bukti_tf');
        $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
        $file->move('bukti_tf', $nama_file);

        transaksi::where('id', $id)->update([
            'bukti_tf' => $nama_file,
        ]);
        return redirect()->back();
    }
}
