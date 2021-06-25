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
        <h4 class="card-header__title mb-3">Form Ambil Antrian</h4>
        <div class="row card-group-row" id="pengumuman">
        </div>

        <div class="row no-gutters" id="antrian">
            <div class="col-lg-3 card-body">

            </div>
            <div class="col-lg-6 card-form__body">
                <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values="[&quot;judul&quot;,&quot;ketua&quot;,&quot;bidang&quot;,&quot;tanggal&quot;,&quot;status&quot;]">
                </div>
            </div>
        </div>

@endsection

@section('js')
@endsection
