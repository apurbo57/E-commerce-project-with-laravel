@extends('main_layout')

@section('content')
<div class="container">
   <div class="sign-in-page">
       <div class="row">
<!-- create a new cheakout -->
<div class="col-md-6 col-sm-6 create-new-account">
<h4 class="checkout-subtitle">Cheakout</h4>
<hr>
<p class="text title-tag-line">Shipping Details...</p>

<form action="{{route('save-shipping-details')}}" method="post" class="register-form outer-top-xs" role="form">
   @csrf
   @include('includes.message')
   <div class="form-group">
       <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
       <input type="text" name="first_name" required class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
   </div>
   <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
        <input type="text" name="last_name" required class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
    </div>
   <div class="form-group">
       <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
       <input type="email" name="email" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
     </div>
   <div class="form-group">
       <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
       <input type="text" name="number" required class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
   </div>
   <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Address <span>*</span></label>
        <input type="text" name="address" required class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
    </div>
    <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">City <span>*</span></label>
            <input type="text" name="city" required class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
     <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Done</button>
</form>


</div>	
<!-- create a new account -->			</div><!-- /.row -->
   </div><!-- /.sigin-in-->
</div>
@endsection