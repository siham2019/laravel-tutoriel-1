@extends("general.general")

@section("posts")
@endsection

@section("content")
   <form action="{{Route('posts.update',$post->id)}}" method="post">
   @csrf
        <label for="title">post title</label>
        <input type="text" name="title" id="title" value={{$post->title}}>

        <label for="description">post description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{$post->description}}</textarea>
       <input type="submit" value="submit">

   </form>
@endsection