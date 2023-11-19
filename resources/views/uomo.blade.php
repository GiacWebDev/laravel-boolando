@extends('layouts.main')

@section('content')
    <div class="container">


        <div class="card">
            <div class="top">
                <img src="/img/products/1.webp" alt="modello" class="image-prod">
                <img src="/img/products/1b.webp" alt="modello" class="img-hover">

                <div class="heart">
                    <span class="icon">&hearts;</span>
                </div>
                <div class="banner">
                    <div class="red-discount">
                        <p>-50%</p>
                    </div>
                    <div class="green">
                        {{-- <p>{{ productObj . sostenibilita }}</p>
                    </div> --}}
                    </div>
                </div>
                <div class="bottom">
                    <p>Levi's</p>
                    <h2>RELAXED FIT TEE UNISEX</h2>
                    <p><span class="price">29.99</span>
                        <span class="discount">20.99</span>
                    </p>
                </div>
            </div>

        </div>
    @endsection

    @section('title')
        | Uomo
    @endsection
