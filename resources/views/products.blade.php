@extends('layout.app')



@section('title','Prodotti')

@section ('content')
    <h1>I nostri prodotti</h1>
    <p>lista prodotti</p>

    <div class="card-container">
        @foreach ($paste as $item)
            
        
        <div class="card">
            <img src="{{$item['src']}}" alt="">
            <div class="overlay">{{ $item['titolo']}}</div>
        </div>
        @endforeach
    </div>
        
    
@endsection