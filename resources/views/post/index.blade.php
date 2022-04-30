  @extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->
  <div class="container">

      <div class="row">

          <div class="col-lg-3">

              <h1 class="my-4">Shop Name</h1>
              <div class="list-group">
                  <a href="/create" class="btn btn-primary btn-block"> Create new post </a>
                  <hr>
                
              </div>

          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-9">

              <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>

              <div class="row">
                @foreach($posts as $post)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                            
                          <a href="#"><img class="card-img-top" src="/images/{{$post->image}}" alt=""></a>
                          <div class="card-body">
                              <h4 class="card-title">
                                  <a href="/show/{{$post->id}}">{{$post->title }}</a>
                              </h4>
                              <h5>prykes </h5>
                              <p class="card-text">{{substr($post->body,0,50)}}{{ strlen($post->body) > 50 ? "...." : "" }}
                              </p>
                              <p> {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>
                              <p> </p>
                          </div>
                          <div class="card-footer">
                              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                          </div>
                      </div>  
                  </div>
                @endforeach
                  

              </div>
              <!-- /.row -->
            
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->
  <div class="row">
      <div class="col-md-12">
  <div class="text-center" style=" display: inline-block;" >
                {!! $posts->links() !!}

    </div>
    </div>
    </div>
  @endsection