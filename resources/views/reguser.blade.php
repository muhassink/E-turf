@extends('userheader')
@section('user')
<section class="vh-100 bg-image" style="background-image: url('turf6.jpg');">
	<div class="mask d-flex align-items-center h-100 gradient-custom-3">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-12 ">
					<div class="card" style="border-radius: 15px;">
						<div class="card-body p-5">
							<h2 class="text-uppercase text-center mb-5">Create an account</h2>

							<form action="/reguseraction" method="post">
								@csrf
								<div class="form-outline mb-4">
									<input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name">
									<label class="form-label" for="form3Example1cg">Your Name</label>
								</div>

								<div class="form-outline mb-4">
									<input type="text" id="form3Example3cg" class="form-control form-control-lg" name="contactnumber">
									<label class="form-label" for="form3Example3cg">Your contactnumber</label>
								</div>

								<div class="form-outline mb-4">
									<input type="email" id="form3Example4cg" class="form-control form-control-lg" name="email">
									<label class="form-label" for="form3Example4cg">your email</label>
								</div>

								<div class="form-outline mb-4">
									<input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password">
									<label class="form-label" for="form3Example4cdg">your password</label>
								</div>



								<div class="d-flex justify-content-center">
									<button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
								</div>

								<p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/userlogin" class="fw-bold text-body"><u>Login here</u></a></p>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection