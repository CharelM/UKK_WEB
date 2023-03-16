@extends('layouts.app')
@section('title', 'Charel | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Form Tambah</strong> Data Buku
                        </div>
                        <div class="card-body card-block">
                            <form method ="post" action="{{route('contacts.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputjudul">Judul Buku</label>
                                    <input type="text" class="form-control" id="inputjudul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputpengarang" class="form-label">Pengarang</label>
                                    <input type="text" class="form-control" id="inputpengarang" name="pengarang"required>
                                </div>
                                <div class="form-group">
                                    <label for="inputpenerbit" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" id="inputpenerbit" name="penerbit" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputtahun" class="form-label">Tahun terbit</label>
                                    <input type="text" class="form-control" id="inputtahun" name="tahun" required>
                                </div>
                                <div class="form-group">
                                    <label for="floatingTextarea2">Deskripsi</label>
                                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="deskripsi" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" name="cover" class="form-control" required>
                                    @error('cover')
                                      <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection