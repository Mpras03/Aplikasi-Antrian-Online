<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Antrian;

class AntrianController extends Controller
{
    public function index ()
    {
        return view('antrian.antrian-data', [
            'antrian' => Antrian::class
        ]);
    }
}
