@extends('layouts.main')
@section('container')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="clearfix">
                <img src="{{ asset('coverbuku/'.$book->cover) }}" class="col-md-6 float-md-end mb-3 ms-md-3" style="width: 17rem;" alt="...">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Form Detail</strong> Data Buku
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Judul</label>
                                <input type="text"  name="judul" class="form-control" value="{{ $book->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" value="{{ $book->pengarang}}">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit}}">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Tahun Terbit</label>
                                <input type="text" name="tahun" class="form-control" value="{{ $book->tahun}}">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="{{ $book->deskripsi}}">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>                
</div>
@endsection