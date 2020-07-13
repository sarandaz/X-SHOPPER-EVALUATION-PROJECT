@extends('layouts.app')

@section('content')
<!-- Page Content -->
 
  
     
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">       
        <div class="row">

            @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="/product/{{ $product->slug }}"><img class="card-img-top" src="{{ $product->imagePath }}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/product/{{ $product->slug }}">{{ $product->name }}</a>
                </h4>
                <h5>${{ $product->price }}</h5>
                <p class="card-text">{{ $product->description }}</p>
              </div>
              
            </div>
          </div>
          @endforeach


      </div>
  </div>
         
      
      
@endsection
