@extends('main')
@section ('title','| Contact')
@section('content')


<div class="container" style="margin-top:80px ; margin-bottom:80px;">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form action="/contact" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">subject</label>
                            <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Enter subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"  name='email'required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="bodymsg" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>Sousse</p>
                    <p>Khzema West</p>
                    <p>Tunisia</p>
                    <p>Email :ecommerce@gmail.com</p>
                    <p>Tel. +216 99 999 999</p>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection