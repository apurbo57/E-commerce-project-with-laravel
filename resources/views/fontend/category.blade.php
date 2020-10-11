@extends('main_layout')

@section('content')
<div class="container">
    <div class="row">									
										
        @if ($products->isEmpty())
            <div class="not_found">
                <span>404</span>
                <h1>Product Not Found</h1> 
            </div>
        @else

        @foreach ($products as $product)
        <div class="col-sm-4 col-md-3 wow fadeInUp">
            <div class="products">
                
                <div class="product">		
                    <div class="product-image">
                        <div class="image">
                        <a href="{{ route('product', $product->id) }}"><img height="300px" src="{{ asset('uploads/product/'. $product->image) }}" alt=""></a>
                        </div><!-- /.image -->			
    
                        <div class="tag new"><span>new</span></div>                        		   
                    </div><!-- /.product-image -->

                    @php($price = false)
                    @if($product->sp_start <= date('Y-m-d') && $product->sp_end >= date('Y-m-d'))
                        @php($price = true)
                    @endif

                    <div class="product-info text-left">
                    <h3 class="name"><a href="{{ route('product', $product->id) }}">{{ $product->product_name }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
    
                        <div class="product-price">	
                            <span class="price">Tk {{ $price ? $product->special_price : $product->price }}</span>
                            @if ($price)
                            <span class="off">{{ sprintf('%.2f',(($product->price-$product->special_price)/$product->price)*100) }} % Off</span>
                            <span class="price-before-discount">Tk {{ $product->price }}</span>
                            @endif
                                                
                        </div><!-- /.product-price -->
                        
                    </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                            <i class="fa fa-shopping-cart"></i>													
                                        </button>                     
                                    </li>
                                
                                    <li class="lnk wishlist">
                                        <a class="add-to-cart" href="#" title="Wishlist">
                                            <i class="icon fa fa-heart"></i>
                                        </a>
                                    </li>
    
                                    <li class="lnk">
                                        <a class="add-to-cart" href="d#" title="Compare">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.action -->
                    </div><!-- /.cart -->
                </div><!-- /.product -->
            </div><!-- /.products -->
        </div><!-- /.item -->
        @endforeach

        @endif
    
    </div><!-- /.row -->
</div>
@endsection