@extends('forms.layouts.master')
@section('content')

<div class="row justify-content-center">
	<div class="col-8">
		<section class="card form-wizard" id="w4">
			<header class="card-header">
				<img style="width:90px" src="{{ asset('images/logo.png')}}" alt="">
			</header>
			<div class="card-body">
				<div class="wizard-progress wizard-progress-lg">
					<div class="steps-progress">
						<div class="progress-indicator"></div>
					</div>
					<ul class="nav wizard-steps">
						<li class="nav-item">
							<a class="nav-link" href="#w4-contact" data-toggle="tab"><span>1</span>Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#w4-register" data-toggle="tab"><span>2</span>Company Info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#w4-qoute" data-toggle="tab"><span>3</span>Request a Qoute</a>
						</li>
					</ul>
				</div>

				<div class="form-horizontal p-3" novalidate="novalidate">
					<div class="tab-content">
						<x-forms.profile />
						<x-forms.register />
						<x-forms.qoute />
					</div>
				</div>
			</div>
			<div class="card-footer">
				<ul class="pager">
					<li class="previous disabled">
						<a><i class="fas fa-angle-left"></i> Previous</a>
					</li>
					<li class="finish hidden float-right target">
						<a>Finish</a>
					</li>
					<li class="next">
						<a>Next <i class="fas fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>

@push('scripts')
	

@endpush
@endsection