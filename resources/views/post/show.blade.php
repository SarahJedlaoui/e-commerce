@extends('main')
@section ('title','|Create')
@section('content')
<div class="row justify-content-center">

    <div class="col-md-5 " style=" margin: 100px 0px 100px 0px;">
        <div class="row col-sm-6">
            <a href="/index" class="btn btn-primary btn-block" style="margin-bottom: 20px">
                << All posts </a> </div> <div class="card" style="width: 18rem;">

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
                        <h5><b>Category: </b>{{$post->category->name}} </h5>
                        <p class="card-text"><b>Description:</b> {{$post->body}}
                        </p>


                    </div>
                    <div class="card-footer">
                        <a href="/shop" role="button"> SEE IN SHOP </a>
                    </div>



        </div>

    </div>
    <div class="col-md-4" style=" margin: 100px 0px 100px 0px; background-color:#FFF5EE;" >
        <div class="well">
            <dl class="dl-horizental">
                <label>Url :</label>
                <p> <a href=" {{ route('pro.single', $post->slug) }}"> {{ route('pro.single', $post->slug) }} </a> </p>

            </dl>
            <dl class="dl-horizental">
                <label>Posted :</label>
                <p> {{ date( 'M j, Y H:i' , strtotime($post->created_at)   )  }} </p>

            </dl>
            @if( $post->created_at ==$post->updated_at )

            @else
            <dl class="dl-horizental">
                <label>Updated :</label>
                <p>{{ date( 'M j, Y H:i' , strtotime($post->updated_at)   )  }}</p>

            </dl>
            @endif
            @if (Auth::user()->id == $post->user->id)

            <div class="row">
                <div class="col-sm-6">
                    <a href="/edit/{{$post->id}}" class="btn btn-primary btn-block"> Edit </a>
                </div>

                <div class="col-sm-6">
                    <form action="/destroy/{{$post->id}}" method="DELETE" class="submit-form">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form>
                </div>
            </div>
            @endif
            <hr>
            <dl class="dl-horizental">
            <h3 class="comments-title"> <i class="bi bi-terminal"></i>{{ $post->comments->count() }} Comments</h3>
                @foreach($comments as $comment)
                @if($comment->post_id== $post->id)
                <div class="comment">
                <div class="author-info">
                 @if($comment->user->img==NULL)
                 <img src="/coursel/nimg.png" alt="Admin" class="author-img">
                    @else
                    <img src="/images/{{$comment->user->img}}" class="author-img"> 
                    @endif
                    <div class="author-name">
                   <a href="/user/{{$post->user->name}}"><h4> {{$comment->user->name}}</h4></a>
                   <p class ="author-time"> {{$comment->created_at}}</p>
                    </div>
                   <hr> 
                </div>
                <div class="comment-content">
                    {{$comment->commentbd}}
                </div> <br>
                @endif
                @endforeach
                </div>
                <form method="POST" action="/comments/{{$post->id}}" class="submit-form" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                   
                            <input type="text" id='title' name="commentbd" class="form-control" required><br><br>
                            <input type="submit" class="btn btn-success form-control" value="Add a comment">
                </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
 @endsection
 </div>
</div>
</div>