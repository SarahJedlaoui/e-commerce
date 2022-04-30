@extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->

  <div class="container" style="margin-top:40px;">

      <div class="row">

          <div class="col-lg-3">

              <div class="list-group">
                  <a href="/index" class="btn btn-primary btn-block"> back to home </a>
                  <hr>
                  

          </div>
          <!-- /.col-lg-3 -->
          
          </div>

          <div class="col-lg-9">

              <div class="row">
              @foreach($post as $poster)
                @if($poster->user_id == $user->id)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                            
                          <a href="#"><img class="card-img-top" src="/images/{{$poster->image}}" alt="" height="280px" width="320px"></a>
                          <div class="card-body">
                              <h4 class="card-title">
                                  <a href="/show/{{$poster->id}}">{{$poster->title }}</a>
                              </h4>
                              <h5>Price : {{$poster->prix}} DT</h5>
                              <p class="card-text">{{substr($poster->body,0,50)}}{{ strlen($poster->body) > 50 ? "...." : "" }}
                              </p>
                              <p>Posted : {{ date( 'M j, Y H:i' , strtotime($poster->created_at)   )  }} </p>
                             
                          </div>
                          <div class="card-footer">
                            <a href="/shop" role="button" > SEE IN SHOP </a>
                          </div>
                      </div>  
                  </div>
                  @endif
                    @endforeach

                  

              </div>
              <!-- /.row -->
            
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->
 
    
</div>
</div>
<div class="d-flex justify-content-center">
    
</div>
<br>
    
    
    
  @endsection