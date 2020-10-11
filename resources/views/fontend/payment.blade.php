@extends('main_layout')

@section('content')
<div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
    <div class="panel panel-default checkout-step-01">
    
        <!-- panel-heading -->
            <div class="panel-heading">
            <h4 class="unicase-checkout-title">
                <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                  <span>1</span>Payment Method
                </a>
             </h4>
        </div>
        <!-- panel-heading -->
    
        <div id="collapseOne" class="panel-collapse collapse in">
    
            <!-- panel-body  -->
            <div class="panel-body">
                <div class="row">				
                    <div class="col-md-6 col-sm-6 guest-login">
    
                        <!-- radio-form  -->
                        <form class="register-form" role="form" action="{{route('order-place')}}" method="post">
                            @csrf
                            <div class="radio radio-checkout-unicase">  
                                <input id="hand_cash" type="radio" name="payment_getway" value="hand_cash" checked>  
                                <label class="radio-button guest-check" for="hand_cash">Cash On Delivary</label>  
                                  <br>
                                <input id="bank" type="radio" name="payment_getway" value="bank">  
                                <label class="radio-button" for="bank">Bank</label>  
                                <br>
                                <input id="bkash" type="radio" name="payment_getway" value="bkash">  
                                <label class="radio-button" for="bkash">Bkash</label>  
                                <br>
                                <input id="paypal" type="radio" name="payment_getway" value="d_card">  
                                <label class="radio-button" for="paypal">Debit Card</label>  
                            </div>  
                            <p class="text title-tag-line ">Register with us for future convenience:</p>
                        <ul class="text instruction inner-bottom-30">
                            <li class="save-time-reg">- Fast and easy check out</li>
                            <li>- Easy access to your order history and status</li>
                        </ul>
    
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button>
                        </form>
                        <!-- radio-form  -->
                        
                    </div>
                    <!-- guest-login -->	
    
                </div>			
            </div>
            <!-- panel-body  -->
    
        </div><!-- row -->
    </div>
    <!-- checkout-step-01  -->
                            <!-- checkout-step-02  -->
                              <div class="panel panel-default checkout-step-02">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                      <span>2</span>Billing Information
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </div>
                                </div>
                              </div>
                              <!-- checkout-step-02  -->
    
                            <!-- checkout-step-03  -->
                              <div class="panel panel-default checkout-step-03">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                           <span>3</span>Shipping Information
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </div>
                                </div>
                              </div>
                              <!-- checkout-step-03  -->
                              
                        </div><!-- /.checkout-steps -->
                    </div>
                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
    <div class="checkout-progress-sidebar ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                </div>
                <div class="">
                    <ul class="nav nav-checkout-progress list-unstyled">
                        <li><a href="#">Billing Address</a></li>
                        <li><a href="#">Shipping Address</a></li>
                        <li><a href="#">Shipping Method</a></li>
                        <li><a href="#">Payment Method</a></li>
                    </ul>		
                </div>
            </div>
        </div>
    </div> 
    <!-- checkout-progress-sidebar -->				</div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
        </div>
@endsection