@extends('layouts.app')

@section('content')

<div class="col-lg-3">
        <h1 class="my-4"></h1>
       
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{ $product->imagePath }}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <h4>${{ $product->price }}</h4>
            <p class="card-text">{{ $product->description }}</p>

            <form action="/cart" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">
              <input type="hidden" name="price" value="{{ $product->price }}">
              <button class="btn btn-primary">Add to Cart                
              </button>


            </form>
           
          </div>
        </div>
        <!-- /.card -->

        
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

      @endsection