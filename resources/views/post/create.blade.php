@extends('main')
@section ('title','|Create')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row justify-content-center">
  <div class="col-md-3" style=" margin: 100px 0px 100px 0px;"  >


<form method="POST" action="/store" class="submit-form" enctype="multipart/form-data" data-parsley-validate>
@csrf
  <label for="fname">Product name:</label>
  <input type="text" id='title' name="title" class="form-control"required><br><br>
  <label for="fname">Slug:</label>
  <input type="text" id='slug' name="slug" class="form-control" required><br><br>
 <label for="lname">Description:</label>
  <textarea type="text" id='body' name="body" class="form-control" rows="6" required maxlength="255"></textarea><br><br>
  <label for="fname">Price DT:</label>
  <input type="text" id='prix' name="prix" class="form-control"required><br><br>
  <label for="category_id">Category:</label>
  <select class="form-control" name="category_id">
    @foreach($categories as $category)
    <option value="{{$category->id}}"> {{ $category->name }}</option>
    @endforeach
  </select>
 
  <label for="image">Add Image:</label>

<br>

<input type="file" id='image' name="image" class="form-control"><br><br>
  <input type="submit" class="btn btn-success form-control" value="Post">
</form>
</div>
</div>
@endsection