@extends('main')
  @section ('title','| Home')
  @section('content')
  <!-- Page Content -->
  <div class="container" style="margin-top:40px;">

      <div class="row">

          <div class="col-lg-3">
              <div class="list-group">
                  <a href="/index" class="btn btn-primary btn-block"> Back to home </a>
                  <hr>
                 </div>
                 </div>
                 </div>
             
                
              <div class="row">
                @foreach($posts as $post)
                @if($post->category_id == $category->id)
             
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h8>Posted by:
                                @if (Auth::user()->id == $post->user->id)<a href="/user/{{$post->user->name}}"> YOU @if($post->user->img==NULL)
                                    <img src="/coursel/nimg.png" alt="Admin" class="rounded-circle" width="50px">
                                    @else
                                    <img class="rounded-circle" src="/images/{{$post->user->img}}" alt="" width="50px"></a>
                                    @endif
                                @else
                                <a href="/user/{{$post->user->name}} "> {{$post->user->name}}
                                @if($post->user->img==NULL)
                                    <img src="/coursel/nimg.png" alt="Admin" class="rounded-circle" width="50px">
                                    @else
                                    <img class="rounded-circle" src="/images/{{$post->user->img}}" alt="" width="50px"></a>
                                    @endif 
                                @endif</h8>
                        </div>
                        <a href="/show/{{$post->id}}"><img class="card-img-top" src="/images/{{$post->image}}" alt="" height="280px" width="320px"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="/show/{{$post->id}}">{{$post->title }}</a>
                            </h4>
                            <h5><b>Price : </b>{{$post->prix}} DT</h5>
                            <p class="card-text"><b>Description:</b> {{substr($post->body,0,50)}}{{ strlen($post->body) > 50 ? "...." : "" }}
                            </p>
                            <p>Posted : {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>

                        </div>
                        <div class="card-footer">
                            <a href="/shop" role="button"> SEE IN SHOP </a>
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
    
    
  @endsection