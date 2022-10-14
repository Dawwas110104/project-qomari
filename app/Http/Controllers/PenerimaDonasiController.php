<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use App\Models\PenerimaDonasi;
use App\Models\master_district;
use Carbon\Carbon;



class PenerimaDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
                ->select('penerima_donasis.*', 'master_districts.name as districts_name')
                ->where('penerima_donasis.name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('master_districts.name', 'LIKE', '%' . $keyword . '%')
                ->sortable()
                ->paginate(3);

        $datas->appends($request->all());

        $kec_domisilis = master_district::where('regency_id', 3578)
                ->orderBy('name', 'asc')
                ->get();

        return view('pages.penerimadonasi.index', compact(
            'datas',
            'keyword',
            'kec_domisilis'
        ));
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
        // return $request->akta_kematian_bapak('file');

        // $validatedData = $request->validate([
        //     'akta_kematian_bapak' => 'required|csv,txt,xlx,xls,pdf|max:2048',
        //     'akta_kematian_ibu' => 'required|csv,txt,xlx,xls,pdf|max:2048',
        // ]);
        
        $model = new PenerimaDonasi;
        $model->name = $request->name;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->alamat = $request->alamat;
        $model->kec_domisili = $request->kec_domisili;
        $model->nomor_kk = $request->nomor_kk;
        $model->nik = $request->nik;
        $model->rekening_bank = rand(1000000, 9999999);
        
        if($request->file('akta_kematian_bapak')){
            $file = $request->file('akta_kematian_bapak');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('akta_kematian_bapak', $nama_file);
            $model->akta_kematian_bapak = $nama_file;
        }

        if($request->file('akta_kematian_ibu')){
            $file = $request->file('akta_kematian_ibu');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('akta_kematian_ibu', $nama_file);
            $model->akta_kematian_ibu = $nama_file;
        }
        $model->save();

        return redirect()->route('penerimadonasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $s
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
        $data = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
        ->select('penerima_donasis.*', 'master_districts.name as districts_name')
        ->where('penerima_donasis.id', $id)
        ->first();

        $kec_domisilis = master_district::where('regency_id', 3578)
                ->orderBy('name', 'asc')
                ->get();

        return view('pages.penerimadonasi.edit', compact(
            'data',
            'kec_domisilis'
        ));
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
        PenerimaDonasi::where('id', $id)->update([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'kec_domisili' => $request->kec_domisili
        ]);

        return redirect()->route('penerimadonasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerimadonasi = PenerimaDonasi::where('id', $id)->first();
        $penerimadonasi->delete();

        return redirect()->route('penerimadonasi.index');
    }

    public function detail($id)
    {
        $data = PenerimaDonasi::join('master_districts', 'kec_domisili', '=', 'master_districts.id')
        ->select('penerima_donasis.*', 'master_districts.name as districts_name')
        ->where('penerima_donasis.id', $id)
        ->first();
        
        return view('pages.penerimadonasi.detail', compact(
            'data'
        ));
    }
}
