@extends('frontend.bigbag.layouts.app') 
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/bigbag/css/thanks.css') }}" />
@endpush
@section('content') 
<section class="single-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-content">
					<h2>{{ __('Order Confirmation') }}</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ __('Thank you') }}</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container padding-bottom-3x mb-2 mt-5">
	<div class="card text-center">
		<div class="card-body padding-top-2x">
			<h3 class="card-title">{{ __('Thank you for your order!') }}</h3>
			
			<div class="padding-top-1x padding-bottom-1x">
				<div class="form-group ">
					<label>{{ __('Email Address') }} <span class="text-danger">*</span></label>
					<input type="email" placeholder="Email Address" name="email" class="form-control col-sm-12" required="" value="{{ Auth::guard('customer')->user()->email ?? '' }}">
				</div>
				<a class="btn btn-inline" href="{{ url('/shop') }}">{{ __('Search') }}</a></div>
		</div>
	</div>
</div>
<hr>
@endsection	