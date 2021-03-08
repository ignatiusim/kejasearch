@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <!-- <img src="{{URL::asset('storage/imagepic.png')}}"> -->
                <h1>All Houses</h1>
                @if(count($fetch)>0)
                    @foreach($fetch as $fetch)
                        <p>some image here</p>
                        <p>location:{{$fetch->location}}</p>
                        <p>size:{{$fetch->size}}</p>
                        <p>price:{{$fetch->price}}</p>
                        <p>contact:{{$fetch->contact}}</p>
                        <hr>
                    @endforeach
                    @else
                        <p>No record found</p>
                @endif

            </div>
            <div class="col-sm-3"></div>
        </div>
    
    </div>
@endsection