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
                            <strong>Form Edit</strong> Data Buku
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('contacts.update', $contact->id)}}" method="post" class="" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Judul</label>
                                    <input type="text"  name="judul" class="form-control" value="{{ $contact->judul}}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Pengarang</label>
                                    <input type="text" name="pengarang" class="form-control" value="{{ $contact->pengarang}}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" value="{{ $contact->penerbit}}">
                                    {{-- <textarea name="penerbit" class="form-control">{{ $contact->penerbit}}</textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Tahun Terbit</label>
                                    <input type="text" name="tahun" class="form-control" value="{{ $contact->tahun}}">
                                    {{-- <textarea name="tahun" class="form-control">{{ $contact->tahun}}</textarea> --}}
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="{{ $contact->deskripsi}}">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Cover</label>
                                    <input type="file" name="cover" class="form-control 
                                    @error('cover') is-invalid @enderror">   
                                    
                                    @error('cover')
                                      <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                </button>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>                
</div>
@endsection