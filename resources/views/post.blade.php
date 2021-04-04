@extends("general.general")

@section("posts")
@endsection

@section("content")
   <h1>posts sssssssssss</h1>
   @if(session("success"))
   <p> {{session("success")}} </p>
 @endif
   @foreach($posts as $post)
     <h4>{{$post->title}}</h4>
     <small>{{$post->created_at->diffForHumans()}}</small>
     <p>{{$post->description}}</p>

     <a href="{{Route('posts.edit',$post->id)}}">update</a>
     <a href="{{Route('posts.delete',$post->id)}}">delete</a>
   
     @endforeach

@endsection