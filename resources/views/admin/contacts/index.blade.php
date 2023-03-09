@extends('layouts.app')
@section('title', 'Charel | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap m-b-10">
                        <h2 class="title-1">Data Buku</h2>
                    </div>
                    <div class="col-m-t-10">
                        <a href="/contacts/create" class="btn btn-primary"> Tambah Buku</a>
                    </div>
                    <div class="input-group mt-3">
                        <form action="/contacts/index" method="GET">
                            <input type="search" class="form-control" placeholder="Cari judul" name="search">
                        </form>
                    </div>
                    
                      <!-- DATA TABLE-->
                    <div class="table-responsive m-t-15 md-12">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Terbit</th>
                                    <th>Deskripsi</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact )
                                <tr>
                                    <td>{{ $index + $contacts->firstItem()}}</td>
                                    <td>{{ $contact->judul}}</td>
                                    <td>{{ $contact->pengarang}}</td>
                                    <td>{{ $contact->penerbit}}</td>
                                    <td>{{ $contact->tahun}}</td>
                                    <td>{{ $contact->deskripsi}}</td>
                                    <td>
                                        <img src="{{ asset('coverbuku/'.$contact->cover) }}" alt="" style="width: 40px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('contacts.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('contacts.destroy', $contact->id)}}"><i class="fas fa-trash" style="color: rgb(255, 0, 0)"></i></a>
                                    </td>
                                </tr>    
                                @endforeach
                            </tbody>
                        </table>
                        {{ $contacts->links() }}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row m-t-10">
            </div>
            </div>
        </div>
    </div>
@endsection