<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<style>
		#cart-modal .modal-dialog {
			width: 350px;
			margin: 3% auto;
		}

		.close:focus {
			outline: none;
			color: red;
		}
	</style>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggler">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-brand">
				<a href="#" class="navbar-brand"></a>
			</div>
			<div class="navbar-header ">
				<ul class="nav">
					<li class="navbar-icon mr-3">
						<button class="btn cart-modal-toggler" data-toggle="modal" data-target="#cart-modal"><i class="fa fa-2x fa-shopping-cart"></i></button>
					</li>
					<li class="navbar-icon">
						<button class="btn user-modal-toggler" data-toggle="modal" data-target="#login-modal"><i class="fa fa-2x fa-user"></i></button>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link text-dark" href="#">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#">CATALOG</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of Navbar -->

	<!-- Login Modal -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a href="login" type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</a>
				</div>
				<div class="modal-body py-0">
					<div class="row">
						<div class="col-md-8">
							<!-- <form method="POST" action="login"> -->
							<?= form_open('login'); ?>
							<?= validation_errors(); ?>
							<p class="text-muted">Log in to your account</p>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-envelope"></i></span>
								</div>
								<input id="username" type="text" class="form-control" name="username" required autocomplete="off" autofocus placeholder="Username" value="<?= set_value('username'); ?>">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-lock"></i></span>
								</div>
								<input id="password" type="password" class="form-control" name="password" required placeholder="Password">
							</div>

							<div class="input-group mb-3">
								<div class="">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember">

										<label class="form-check-label text-muted" for="remember">
											Remember Me
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-5 pb-3">
									<button type="submit" class="btn btn-primary float-left">Log in</button>
								</div>
								<div class="col-7 pb-3">
									<a class="btn btn-link" href="#">Forgot Your Password?</a>
								</div>
							</div>
							<!-- </form> -->
						</div>
						<div class="col-md-4 bg-primary ">
							<div class="text-center">
								<p class="text-light pt-3">Don't have an account?</p>
								<a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Login Modal -->
	<!-- Register Modal -->
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body py-0">
					<div class="row">
						<div class="col-md-8">
							<form method="POST" action="#">
								<p class="text-muted">Create an account</p>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus placeholder="Email Address">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-lock"></i></span>
									</div>
									<input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
								</div>

								<div class="input-group mb-3">
									<div class="">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember">

											<label class="form-check-label text-muted" for="remember">
												Remember Me
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-5 pb-3">
										<button type="submit" class="btn btn-primary float-left">Sign up</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4 bg-primary">
							<div class="text-center">
								<p class="text-light pt-3">Already have an account?</p>
								<a href="#" class="btn btn-outline-light">Log In</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Register Modal -->
	<!-- Cart Modal -->
	<div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="cart" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Jane Doe's Cart</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table text-right table-borderless">
						<tbody>
							<tr class="item">
								<td><img src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Product Image" height="100" width="100" class="pull-left">
									<span class="font-weight-bold">
										Eva Gluthathione
									</span>
									<p>
										5boxes x ₱6,500.00
									</p>
								</td>
							</tr>
							<td><img src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Product Image" height="100" width="100" class="pull-left">
								<span class="font-weight-bold">
									Eva Gluthathione
								</span>
								<p>
									5boxes x ₱6,500.00
								</p>
							</td>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Update</button>
					<button type="button" class="btn btn-primary">Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Cart Modal -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function() {
			if (window.matchMedia("(max-width: 767px)").matches) {
				$('.navbar-toggler').show();
			} else {
				$('.navbar-toggler').hide();
				$('.navbar-header').insertAfter($('.collapse'));
			}
		});
	</script>
