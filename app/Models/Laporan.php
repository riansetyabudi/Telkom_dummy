<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $primaryKey = 'idlaporan';
    public $incrementing = true;
    protected $fillable = ['alamat_laporan', 'status_laporan', 'bukti_laporan', 'bukti_penyelesaian_laporan', 'tanggal_masuk', 'tanggal_selesai'];
    public $timestamps = false;
    public function eksekutor()
    {
        return $this->belongsTo(Eksekutor::class, 'nik');
    }
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'nik');
    }
    public function admin()
    {
        return $this->belongsToMany(Admin::class, 'nik');
    }
}
