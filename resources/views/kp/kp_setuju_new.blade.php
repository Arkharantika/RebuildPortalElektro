@extends('layouts.backend')

@section('title','Portal Elektro')

@section('content')
<!-- Page Content -->
<div class="content">
<!-- Labels on top -->
    <div class="block">
        <div class="block-header block-header-default">
            <h1 class="block-title" style="text-align: center; color: green;"><b>DATA KERJA PRAKTEK</b></h1>
        </div>
        <div class="block-content block-content-full">
            <table class="table">
                <tr>
                    <td style="width: 30%">Nama Peserta</td>
                    <td style="width: 5%">:</td>
                    <td style="width: 65%"><strong>{{$setuju->nama_mhs}}</strong></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><strong>{{$setuju->nim}}</strong></td>
                </tr>
                <tr>
                    <td>Jumlah SKS Lulus</td>
                    <td>:</td>
                    <td><strong>{{$setuju->sks}}</strong></td>
                </tr>
                <tr>
                    <td>Indeks Prestasi Mahasiswa (IPK)</td>
                    <td>:</td>
                    <td><strong>{{$setuju->ipk}}</strong></td>
                </tr>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>:</td>
                    <td><strong>{{$setuju->perusahaan_nama}}</strong></td>
                </tr>
                <tr>
                    <td>Alamat Perusahaan</td>
                    <td>:</td>
                    <td><strong>{{$setuju->perusahaan_almt}}</strong></td>
                </tr>
                <tr>
                    <td>Jenis Perusahaan</td>
                    <td>:</td>
                    <td><strong>{{$setuju->perusahaan_jenis}}</strong></td>
                </tr>
                <tr>
                    <td>PIC</td>
                    <td>:</td>
                    <td><strong>{{$setuju->pic}}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal Mulai KP</td>
                    <td>:</td>
                    <td><strong>{{date("d-m-Y", strtotime($setuju->tgl_mulai_kp))}}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal Selesai KP</td>
                    <td>:</td>
                    <td><strong>{{date("d-m-Y",strtotime($setuju->tgl_selesai_kp))}}</strong></td>
                </tr>
            </table>

            @if($checking == '')
            <!-- button for ask surat tugas -->
                <div class="row">
                    <div class="col-12">
                        <a href="{{url('kp/pendaftaran/ask_surat_tugas')}}" class="btn btn-alt-danger" data-wizard="finish">
                            Ajukan Permintaan Surat Tugas !! <i class="fa fa-angle-right ml-5"></i>
                        </a>
                    </div>
                </div>

            @elseif(($checking->status_ask_surat_tugas ?? '') == 1)
                <span class="badge badge-danger" data-wizard="finish">Silahkan Menghubungi Koordinator untuk mendapatkan surat tugas KP !!</span>
            
            @elseif(($checking->status_ask_surat_tugas ?? '') == 0)
                <p class="badge badge-primary" data-wizard="finish">Surat Tugas sudah dicetak, Anda dapat melaksanakan Kerja Praktik  !!</p>
            @endif
                                
        </div>
    </div>
    <!-- END Labels on top -->
</div>

@endsection
