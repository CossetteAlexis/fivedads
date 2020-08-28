<section class="container px-5">
	<div class="row pt-5">
		<div class="col-md-4">
			<h4 class="d-flex justify-content-between align-items-center mb-3">
				<span class="text-muted">Jane Doe's Cart</span>
				<i class="fa float-left" style="font-size:24px">&#xf07a;
					<span class='badge badge-warning' id='lblCartCount'> 3 </span></i>
			</h4>
			<ul class="list-group mb-3">
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">Product 1</h6>
						<small class="text-muted">This is product 1.</small>
					</div>
					<span class="text-muted">₱100</span>
				</li>
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">Product 2</h6>
						<small class="text-muted">This is product 2.</small>
					</div>
					<span class="text-muted">₱100</span>
				</li>
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">Product 3</h6>
						<small class="text-muted">This is product 3.</small>
					</div>
					<span class="text-muted">₱100</span>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<span>Total : </span>
					<strong>₱300</strong>
				</li>
			</ul>
		</div>
		<div class="col-md-8 px-5">
			<!-- <ul class="breadcrumb bg-white pt-5">
                    <li><a href="#" class="text-secondary">Cart</a></li>
                    <li><a href="#" class="text-secondary">Information</a></li>
                    <li><a href="#" class="text-secondary">Shipping</a></li>
                    <li>Payment</li>
                </ul> -->

			<form class="needs-validation" novalidate>
				<div class="mb-3">
					<label for="address">Contact Information</label>
					<input type="number" class="form-control" id="mobile" placeholder="MOBILE NUMBER" required />
					<div class="invalid-feedback">
						Please enter your mobile number.
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Keep me up to date.</label>
					</div>
				</div>
				<p>Shipping Address</p>
				<div class="row">
					<div class="col-md-6 mb-3">
						<input type="text" class="form-control" id="firstName" placeholder="FIRST NAME" value="" required />
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" class="form-control" id="lastName" placeholder="LAST NAME" value="" required />
						<div class="invalid-feedback">Valid last name is required.</div>
					</div>
				</div>

				<div class="mb-3">
					<input type="text" class="form-control" id="address" placeholder="COMPLETE ADDRESS" required />
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>

				<div class="mb-3">
					<input type="text" class="form-control" id="landmark" placeholder="NEAREST LANDMARK" />
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<input type="text" class="form-control" id="street" placeholder="STREET" value="" />
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" class="form-control" id="city" placeholder="BARANGAY" value="" required />
						<div class="invalid-feedback">required.</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<!-- <input type="text" class="form-control" id="street" placeholder="CITY" value="" /> -->
						<select class="custom-select d-block w-100 city" id="city" required name="city" onchange="check_cod()">
							<?php foreach ($cities as $row) { ?>
								<option class="option" name="option"><?= $row['city']; ?></optio>
								<?php } ?>
						</select>

					</div>
					<p class="cod_msg">adf</p>
					<div class="col-md-6 mb-3">
						<input type="number" class="form-control" id="number" placeholder="ALTERNATIVE MOBILE NUMBER" value="" required />
						<div class="invalid-feedback">required.</div>
					</div>
				</div>
				<div class="mb-3">
					<select class="custom-select d-block w-100" id="country" required>
						<option value="">Philippines</option>
						<?php foreach ($countries as $row) { ?>
							<option><?= $row['nicename']; ?></option>
						<?php } ?>
					</select>

					<div class="invalid-feedback">
						Please select a valid country.
					</div>
				</div>
				<div class="mb-3">
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Save information for later.</label>
					</div>
				</div>
			</form>
			<div class="pt-2">
				<a href="">Return to cart</a>
				<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#orderconfirmed">Completed order</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="orderconfirmed" tabindex="-1" role="dialog" aria-labelledby="orderconfirmed" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row" id="orderconfirmed">
						<div class="col">
							<div>
								<small>Order #1101</small>
								<p class="lead font-weight-bold">Thank you Jane Doe!</p>
							</div>
							<div class="card">
								<div class="card-text p-3" style="line-height: 10px;">
									<p class="">Your order is confirmed</p>
									<small class="font-weight-light">You'll receive a confirmation text with your oder number shortly.</small>
								</div>
							</div>
							<div class="card my-3">
								<div class="card-text p-3" style="line-height: 10px;">
									<p class="">Order updates</p>
									<small class="font-weight-light">You'll shipping and delivery updates by text.</small>
									<p class="mt-3 p-3 border"><i class="fa fa-envelope" aria-hidden="true"></i> Get shipping updates by email</p>
								</div>
							</div>
							<div class="card my-3">
								<div class="card-text p-3" style="line-height: 10px;">
									<p class="">Customer information</p>
									<div class="row">
										<div class="col">
											<div class="py-3">
												<p class="font-weight-bold">Contact information</p>
												<p class="font-weight-light">+639226091707</p>
											</div>
											<div class="py-2">
												<p class="font-weight-bold">Shipping method</p>
												<p class="font-weight-light">Standard</p>
											</div>
											<div class="py-2">
												<div class="row">
													<div class="col">
														<p class="font-weight-bold">Shipping address</p>
														<p class="font-weight-light">Jane Doe</p>
														<p class="font-weight-light">101 Deca Homes Tisa</p>
														<p class="font-weight-light">Building 6</p>
													</div>
													<div class="col">
														<p class="font-weight-light">+639226091707 Cebu</p>
														<p class="font-weight-light">Philippines</p>
														<p class="font-weight-light">+639226091707</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	
</script>
