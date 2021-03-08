@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

            <h1>add a house</h1>
            {{Form::open(array('action'=>'App\Http\Controllers\PostController@store','method'=>'POST'))}}
                <div class="form-group">
                    {{Form::label('size','size:')}}
                    {{Form::text('size','',['class'=>'form-control','placeholder'=>'enter the size of the house'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('price','price:')}}
                    {{Form::number('price','',['class'=>'form-control','placeholder'=>'enter the price'])}}
                </div>
                  <div class="form-group">
                    {{Form::label('location','location:')}}
                    {{Form::text('location','',['class'=>'form-control','placeholder'=>'enter the location '])}}
                </div>
                  <div class="form-group">
                    {{Form::label('contact','contact:')}}
                    {{Form::text('contact','',['class'=>'form-control','placeholder'=>'enter phone numer '])}}
                </div>
                <!-- <div class="form-group">
                    {{-- {{Form::label('location','location:')}}
                    {{Form::text('price','',['class=>form-control'.'placeholder'=>'enter the location '])}} --}}
                </div> -->

                    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
                    {{Form::close()}}

            </div>
            <div class="col-sm-3"></div>
        </div>
    
    </div>
@endsection