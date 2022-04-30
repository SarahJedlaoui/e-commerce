@extends('main')
@if (Auth::user()->name == $post->user->name) 
@section ('title','|Create')
@section('content')
<div class="row justify-content-center">
@if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/update/{{$post->id}}" method="POST"  enctype="multipart/form-data" class="submit-form" style="margin-top: 80px; "data-parsley-validate>
 @csrf
 

<div class="row justify-content-center">

    <div class="col-md-8 ">
    <label for="fname">Product name:</label>
  <input type="text" id='title' name="title" class="form-control" value="{{$post->title}}"><br><br>
  <label for="fname">Slug:</label>
  <input type="text" id='slug' name="slug" class="form-control" value="{{$post->slug}}" ><br><br>
 <label for="lname">Description:</label>
  <textarea type="text" id='body' name="body" rows="6" class="form-control" value="{{$post->body}}" maxlength="255"></textarea >   <br><br>
  <label for="category_id">Category:</label>
  <select class="form-control" name="category_id">
    @foreach($categories as $category)
    <option value="{{$category->id}}"> {{ $category->name }}</option>
    @endforeach
  </select>
  <label for="fname">Price Dt:</label>
  <input type="text" id='slug' name="prix" class="form-control" value="{{$post->prix}}" ><br><br>
  <label for="image">Add Image:</label>
@csrf
<br>

<input type="file" id='image' name="image" class="form-control" value="{{$post->image}}" required ><br><br>
@csrf
</div>
<div class="col-md-4">
    <div class="well">
        <dl class="dl-horizental">
            <dt>Create at :</dt>
            <dd>{{ date( 'M j, Y H:i' , strtotime($post->updated_at)   )  }} </dd>

        </dl>
        <dl class="dl-horizental">
            <dt>Updated at :</dt>
            <dd>{{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }}</dd>

        </dl>
        <div class="row">
            <div class="col-sm-6">
            <button type="submit" class="btn btn-success btn-block">Save </button>
            </div>

            <div class="col-sm-6">
                <a href="/show/{{$post->id}}" class="btn btn-danger btn-block" style="padding: 5px;"> Cancel</a>
            </div>
        </div>
    </div>
    </div>
</form>
</div>

</div>

@endsection
@endif