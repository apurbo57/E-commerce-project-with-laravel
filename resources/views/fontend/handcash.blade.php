@extends('main_layout')

@section('content')
<div class="body-content outer-top-bd">
	<div class="container">
		<div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					<h1 style="font-size: 100px;">Thanks For Order</h1>
					<p>We will contract as soon as possible. </p>
					<a href="{{route('index')}}" style="color:red"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection