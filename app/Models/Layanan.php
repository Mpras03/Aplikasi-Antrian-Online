<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $nomor_antrian
 * @property integer $layanan_id
 * @property string $nama
 * @property string $nama_perusahaan
 * @property Layanan $layanan
 */
class Layanan extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable =['nama_layanan','huruf'];

    /**
     * @return hasmany
     */
    public function antrian(){
        return $this->hasMany('App\Models\Antrian');
    }
}
