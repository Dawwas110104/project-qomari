<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Carbon\Carbon;


class PenerimaDonasi extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'name',
        'donatur_id',
        'tanggal_lahir',
        'alamat',
        'kec_domisili',
        'nomor_kk',
        'nik',
        'akta_kematian_ibu',
        'akta_kematian_bapak',
        'rekening_bank',
    ];

    public $sortable = [
        'name', 'tanggal_lahir', 'kec_domisili'
    ];

    public function usia(){
        return Carbon::parse($this->attributes['tanggal_lahir'])->age;
    }
}
