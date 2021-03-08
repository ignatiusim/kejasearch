@extends('layouts.app')

@section('content')
    <h1>Update Records</h1>
@endsection@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

            <h1>Update Record</h1>
            {{Form::open(array('action'=>['App\Http\Controllers\PostController@update',$post->id],'method'=>'POST'))}}
                <div class="form-group">
                    {{Form::label('size','size:')}}
                    {{Form::text('size',$post->size,['class'=>'form-control'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('price','price:')}}
                    {{Form::number('price',$post->price,['class'=>'form-control'])}}
                </div>
                  <div class="form-group">
                    {{Form::label('location','location:')}}
                    {{Form::text('location',$post->location,['class'=>'form-control'])}}
                </div>
                  <div class="form-group">
                    {{Form::label('contact','contact:')}}
                    {{Form::text('contact',$post->contact,['class'=>'form-control'])}}
                </div>
                <!-- <div class="form-group">
                    {{-- {{Form::label('location','location:')}}
                    {{Form::text('price','',['class=>form-control'.'placeholder'=>'enter the location '])}} --}}
                </div> -->


                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
                    {{Form::close()}}

            </div>
            <div class="col-sm-3"></div>
        </div>
    
    </div>
@endsection