@extends('layouts.template')

@section('contents')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home-utama')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('konsultasi')}}">Konsutasi</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Hasil Diagnosa</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hasil Diagnosa</h4>
                        <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                        <table class="table table-striped">
                           <tr>
                               <th width="150px">Nama</th>
                               <th width="30px">:</th>
                               <th>{{$pasien->nama_lengkap}}</th>
                           </tr>
                           <tr>
                                <th>Jenis Kelamin</th>
                                <th>:</th>
                                <th>{{$pasien->jenis_kelamin}}</th>
                            </tr>
                            <tr>
                                <th>Umur </th>
                                <th>:</th>
                                <th>{{$pasien->umur}} tahun</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <th>{{$pasien->alamat}}</th>
                            </tr>
                            <tr>
                                <th>Nama Penyakit</th>
                                <th>:</th>
                                <th> {{$penyakit->nama_penyakit}}</th>
                            </tr>
                       </table>
                       <hr>
                       <h5>Keterangan : </h5>

                       <h6>Deskripsi : </h6>
                        <p>{{$penyakit->deskripsi}}</p>

                        <h6>Gejala : </h6>
                        <p>
                            <div class="bootstrap-label">
                                @foreach ($gejala as $item)

                                   <span class="label label-pink"> {{$item->gejala->gejala}}</span>
                                @endforeach
                               </div>

                        </p>

                        <h6>Pengobatan : </h6>
                        <p>
                            <textarea readonly cols="150" rows="5">  {{$penyakit->pengobatan}}</textarea>
                        </p>
                        <h6>Penyebab : </h6>
                        <p>
                            <textarea readonly cols="150" rows="5">  {{$penyakit->penyebab}}</textarea>
                        </p>
                        <h6>Pencegahan : </h6>
                        <p>
                            <textarea readonly cols="150" rows="5">  {{$penyakit->pencegahan}}</textarea>
                        </p>

                        <div class="col-md-12 text-right">
                            <a href="{{route('export', ['pasien' => $pasien, 'penyakit' => $penyakit])}}"> <button type="submit" class="btn btn-outline-pink">Export PDF</button></a>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection

