@extends('main')

@section ('title','|Create')
@section('content')
@if(Auth::user()->id == $user->id)
@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container" style="margin-top: 100px; margin-bottom:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit</div>
                <h1></h1>

                <div class="card-body">
                <form action="/user/update/{{$user->name}}" method="POST"  enctype="multipart/form-data" class="submit-form"data-parsley-validate>
                        @csrf

                       
                        @csrf
                        <br>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">update picture</label>
                            <div class="col-md-6">
                              
                        <input type="file" id='image' name="img" class="form-control"  >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone number (optional)</label>
                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control " name="phone" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" maxlength="10" value="{{ $user->phone }}">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

                            <div class="col-md-6">

                                <select id="location" class="form-control " name="location">
                                    <option value="Sousse">Sousse</option>
                                    <option value="Rejiche">Rejiche</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Beja">Beja</option>
                                    <option value="Kairaouan">Kairaouan</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Bizzerte">Bizzerte</option>
                                    <option value="Kef">Kef</option>

                                </select>


                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="job" class="col-md-4 col-form-label text-md-right">Job(optional): </label>

                            <div class="col-md-6">
                                <input id="job" type="job" class="form-control " name="job" value="{{$user->job }}" autocomplete="job">


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">Facebook-link(optional): </label>

                            <div class="col-md-6">
                                <input id="facebook" type="facebook" class="form-control " name="facebook" value="{{ $user->facebook }}" autocomplete="facebook">


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">Instagram-link(optional): </label>

                            <div class="col-md-6">
                                <input id="instagram" type="instagram" class="form-control " name="instagram" value="{{ $user->instagram }}" autocomplete="instagram">


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="github" class="col-md-4 col-form-label text-md-right">Github-link(optional): </label>

                            <div class="col-md-6">
                                <input id="github" type="github" class="form-control " name="github" value="{{ $user->github}}" autocomplete="github">


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">Twitter-link(optional): </label>

                            <div class="col-md-6">
                                <input id="twitter" type="twitter" class="form-control " name="twitter" value="{{ $user->twitter }}" autocomplete="twitter">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">website-link(optional): </label>

                            <div class="col-md-6">
                                <input id="website" type="website" class="form-control " name="website" value="{{$user->website }}" autocomplete="website">
                            </div>
                        </div>
                        


                        

                     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="position: relative;">
                                <button type="submit" class="btn btn-primary">
                                    Save changes                          </button>
                                    </form>
                                   
                            </div>
                        </div>
                        <a href="/user/{{$user->name}}"><button type="btn" class="btn btn-danger" style="position: absolute;">
                                   cancel                              </button></a> 
                </div>
            </div>
        </div>
    </div>

  
</div>
</div>
</form>
</div>


@endif
@endsection