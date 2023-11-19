@extends('layouts.main')

@section('content')
    <div class="container">
        @forelse ($products as $product)
            <div class="card">
                <div class="top">
                    <img src="{{ $product['primaryImage'] }}" alt="{{ $product['modello'] }}" class="image-prod">
                    <img src="{{ $product['secondaryImage'] }}" alt="{{ $product['modello'] }}" class="img-hover">

                    <div class="heart">
                        <span class="icon">&hearts;</span>
                    </div>
                    <div class="banner">
                        <div class="red-discount">
                            <p>{{ $product['discount'] }}</p>
                        </div>
                        <div class="green">
                            {{-- <p>{{ productObj . sostenibilita }}</p>
                    </div> --}}
                        </div>
                    </div>
                    <div class="bottom">
                        <p>{{ $product['marca'] }}</p>
                        <h2>{{ $product['modello'] }}</h2>
                        <p><span class="price">{{ $product['fullPrice'] }}</span>
                            <span class="discount">{{ $product['lastPrice'] }}</span>
                        </p>
                    </div>
                </div>
            @empty
                <h2>Non ci sono prodotti</h2>
        @endforelse
    </div>
@endsection

@section('title')
    | Uomo
@endsection
