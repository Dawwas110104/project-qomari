<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\transaksi;
use App\Models\User;
use App\Models\PenerimaDonasi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return 'olkgnn';
        $keyword = $request->keyword;
        $datas = transaksi::join('users', 'transaksis.donatur_id', '=', 'users.id')
                ->join('penerima_donasis', 'transaksis.pd_id', '=', 'penerima_donasis.id')
                ->select('transaksis.*', 'users.name as donatur_name', 'penerima_donasis.name as penerimadonasi_name')
                ->get();
                // ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                // ->orWhere('master_districts.name', 'LIKE', '%' . $keyword . '%')
                // ->sortable()
                // ->paginate(3);

        // $datas->appends($request->all());
        return view('pages.transaksi.index', compact([
            'keyword',
            'datas'
        ]));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = transaksi::all();
        $donaturs = User::where('role_id', 2)->get();
        $penerima_donasis = PenerimaDonasi::all();

        return view('pages.transaksi.tambah', compact([
            'datas',
            'donaturs',
            'penerima_donasis'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = transaksi::join('penerima_donasis', 'penerima_donasis.id', '=', 'transaksis.pd_id')
                ->select('penerima_donasis.*')
                ->first();
        $donatur = User::where('id', $request->donatur_id)->first();

        transaksi::create([
            'donatur_id' => $request->donatur_id,
            'pd_id' => $request->pd_id,
            'bulan' => $request->bulan,
            'nominal' => $request->nominal,
            'status' => 0,
        ]);

        $details = [
            'title' => 'Mail from Anak Yatim Platform',
            'body' => 'Penagihan uang infaq untuk',
            'anak_yatim' => $data->name,
            'bulan' => $request->bulan,
        ];

        // return $details;

        \Mail::to($donatur->email)->send(new \App\Mail\MyTestMail($details));

        return redirect()->route('transaksi.index');
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
        $transaksi = transaksi::where('id', $id)->first();
        $transaksi->delete();

        return redirect()->route('transaksi.index');
    }

    public function detail($id)
    {
        $data = transaksi::where('transaksis.id', $id)
                ->join('users', 'transaksis.donatur_id', '=', 'users.id')
                ->join('penerima_donasis', 'transaksis.pd_id', '=', 'penerima_donasis.id')
                ->select('transaksis.*', 'users.name as nama_donatur', 'penerima_donasis.name as nama_penerimadonasi')
                ->first();
        
        return view('pages.transaksi.detail', compact([
            'data',
        ]));

    }

    public function coba(Request $request)
    {
        $datas = transaksi::join('users', 'transaksis.donatur_id', '=', 'users.id')
                ->join('penerima_donasis', 'transaksis.pd_id', '=', 'penerima_donasis.id')
                ->select('transaksis.*', 'users.name as donatur_name', 'penerima_donasis.name as penerimadonasi_name')
                ->get();

        return view('pages.transaksi.coba1', compact([
            'datas',
        ]));
    }

    public function terima($id)
    {
        transaksi::where('id', $id)->update([
            'status' => 1,
        ]);

        return redirect()->route('transaksi.index');
    }

    public function tolak($id)
    {
        transaksi::where('id', $id)->update([
            'status' => -1,
        ]);

        return redirect()->route('transaksi.index');
    }

    public function email()
    {
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('dawwas.inha@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        dd("Email is Sent.");
    }
}
