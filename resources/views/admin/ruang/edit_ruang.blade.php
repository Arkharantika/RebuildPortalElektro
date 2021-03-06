@extends('layouts.backend')

@section('title','Admin Ruang')

@section('content')
<div class="content">
    <!-- Bootstrap Design -->
    <h2 class="content-heading">Ruang</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Default Elements -->
                <div class="block">
                    <!-- <div class="block-header block-header-default">
                        <h3 class="block-title">Pengajuan Kerja Praktek</h3>
                    </div> -->
                    <div class="block-content block-content-full">
                        <!-- Form Labels on top - Default Style -->
                        <form action="{{ route('admin.ruang.update',$data->id) }}" method="post">
                        @method('PATCH')
                        @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama ruang">Nama Ruang</label>
                                        <input type="text" class="form-control" id="nama_ruang" value="{{$data->nama_ruang}}" name="nama_ruang">
                                        <span class="text-danger">{{ $errors->first('nama_ruang') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('admin.ruang.index')}}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                        <!-- END Form Labels on top - Default Style -->
                    </div>
                </div>
                <!-- END Default Elements -->
            </div>
        </div>
</div>
@endsection
@section('js_after')
<script>jQuery(function(){ Codebase.helpers(['flatpickr','select2']); });</script>
@endsection
