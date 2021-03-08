@@extends('layout.app')

@section('content')
    <div calss="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <p>some image here</p>
                <p>Location:{{$post->location}}</p>
                <p>Size:{{$post->Size}}</p>
                <p>Price:{{$post->Price}}</p>
                <p>Contact:{{$post->Contact}}</p>
            </div>
            <button class="btn btn-warning"><a herf = "/post/{{$post->id}}/edit">Edit</a></button>
            {{Form::open(array('action'=>['App\Http\controller\PostController@destroy',$post->id],'method'=>'POST'))}}
                {{Form::hidden('method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {{form::close}}
          </div class="col-sm-3"></div>
        </div>
    </div>
@endsection
