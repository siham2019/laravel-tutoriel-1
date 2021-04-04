@extends("general.general")

@section("welcome")
@endsection

@section("content")
   <h1>lohhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhh</h1>
   <a href="{{Route('postss')}}">posts</a>
   <a href="{{Route('postss.add')}}">add posts</a>

    @if(session("success"))
      <p> {{session("success")}} </p>
    @endif

@endsection