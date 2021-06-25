@extends('layouts.base')
@section('title', "Home")

@section('css')
    <style media="screen">
        a{
            text-decoration: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid page__container">
        <div class="row card-group-row" id="pengumuman">
            <a href="{{route('front.index')}}" class="btn btn-secondary">Buat antrian baru</a>
        </div>
        <div class="row no-gutters" id="antrian">
            <div class="col-lg-12 text-center card-body">
                <h4 class="card-header__title mb-3">Nomor Antrian anda adalah</h4>
                <h1>
                    {{$antrian -> nomor_antrian}}
                </h1>
                <h4>Jenis layanan anda {{$antrian -> layanan -> nama_layanan}}</h4>
                <a href="{{}}" class="btn btn-success">Cetak nomor antrian</a>
            </div>
            <div class="col-lg-6 card-form__body">
                <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values="[&quot;judul&quot;,&quot;ketua&quot;,&quot;bidang&quot;,&quot;tanggal&quot;,&quot;status&quot;]">
                </div>
            </div>
        </div>

@endsection

@section('js')
@endsection
