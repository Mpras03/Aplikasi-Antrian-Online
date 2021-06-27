<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nomor_antrian
 * @property integer $layanan_id
 * @property string $nama
 * @property string $nama_perusahaan
 * @property Layanan $layanan
 */
class Antrian extends Model
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
    protected $fillable =['nama', 'nama_perusahaan', 'layanan_id','nomor_antrian','status'];

    /**
     * Search query in multiple whereOr
     */
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('nama', 'like', '%'.$query.'%')
                ->orWhere('nama_perusahaan', 'like', '%'.$query.'%')
                ->orWhere('nomor_antrian', 'like', '%'.$query.'%');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layanan(){
        return $this->belongsTo('App\Models\Layanan', 'layanan_id');
    }
}
