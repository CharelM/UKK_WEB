@extends('layouts.app')
@section('title', 'Noviana | Dashboard')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="input-group mb-3">
                <form action="/home" method="GET">
                  <input type="search" class="form-control" placeholder="Cari judul" name="search">
              </form>
              </div>
              <div class="row g-2">  
                @foreach ($contacts as $index => $contact )
                <div class="col-6">
                  <div class="p-3">
                    <div class="card" style="width: 18rem;">
                      <img src="{{ asset('coverbuku/'.$contact->cover) }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">{{ $contact->judul}}</h5>
                        <p class="card-text">{{ $contact->deskripsi}}</p>
                        <a href="/detail/{{$contact->id}}" class="btn btn-primary m-t-10">Lihat Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
        {{ $contacts->links() }}
    </div>            
</div>
@endsection