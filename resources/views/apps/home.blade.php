@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-sm-6">
                <div class="dash top-distance-dash-hero"></div>
                <div class="greeting">

                    <div class="main-title">
                        <p>Rifqi Arif Mahfud</p>
                     </div>
                     <div class="short-desc">
                        <p>Tanggal Lahir: 27 Maret 2003</p>
                        <p>Asal Kota: Mojokerto</p>
                        <p>Hobi: Futsal, pingpong, volly</p>
                     </div>

                <a href="{{ route('item.index') }}" type="button" class="btn btn-light btn-view-data">View Data <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-sm-6">
                <img src="{{ Vite::asset('') }}" class="fotoku img-fluid" alt="fotoku">
            </div>
        </div>
    </section>
@endsection
