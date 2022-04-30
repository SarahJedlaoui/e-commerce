@extends('main')
@section ('title','| About')
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Your products in cart</h1>
     </div>
</section>
@if(Session::has('cart'))

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th scope="col">Product</th>
                            <th scope="col">Description</th>
                            
                            <th scope="col" class="text-right">Price</th>
                            
                        </tr>
                    </thead>
                    
                        
                    
                    <tbody>
                        @foreach($posts as $post)
                            
                        
                        <tr>
                            
                            <td>{{$post['item'] ['title']}}</td>
                            <td>{{$post['item'] ['body']}}</td>
                            
                            <td class="text-right">{{$post ['item'] ['prix']}}DT</td>
                            
                        </tr>
                        
                        @endforeach
                        <tr>
                            
                            <td></td>
                            <td></td>
                            
                            <td class="text-center"><strong> Total : {{$totalPrice}} DT</strong></td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="/index" class="btn btn-primary btn-block text-uppercase"> Continue Shopping </a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn  btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else 
<div class="row">
    <div class="col-12">
        <h3> No item in Cart </h3>
    </div>
</div>


@endif



@endsection