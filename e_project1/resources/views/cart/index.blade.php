@extends('layouts.app')

@section('content')


 <div class="col-sm-12 col-md-10 col-md-offset-1">

 		<h1>Cart</h1>


 			@if (session()->has('success'))
 			<div class="alert alert-success">
 				{{ session()->get('success')}}
 			</div>
 			@endif

 			@if (Cart::count() > 0)	


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>                        
                        <th>Quantity</th>
                        
                        <th class="text-right">Price</th>
                        
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                @foreach (Cart::content() as $item)  
                <tr>                  
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $item->model->name }}</h4>
                                <h5 class="media-heading">{{ $item->model->description }}</h5>
                                </div>
                        </div></td>


                        <td class="col-md-1"> Description </td>
                        <td class="text-right"><strong>${{ $item->model->price }}</strong></td>
                        
                        <td class="col-md-1">                        
                    <td class="text-right">
                       
                        <form action="/cart/{{ $item->rowId }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
                    @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Total</h5></td>
                        <td class="text-right"><h5><strong>${{ Cart::subtotal() }}</strong></h5></td>
                    </tr>
                 
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        
                        <td>
                        <a href="/home">
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                    
                        <td>
                            <a href="/checkout">
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        @else

        <h3> No items in Cart!</h3>
        @endif

       



@endsection
