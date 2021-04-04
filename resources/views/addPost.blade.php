@extends("general.general")

@section("posts")
@endsection

@section("content")

@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

<form action="{{Route('posts.add')}}" method="post">
   @csrf
        <label for="title">post title</label>
        <input type="text" name="title" id="title">

        <label for="description">post description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
       <input type="submit" value="submit">
   </form>
@endsection