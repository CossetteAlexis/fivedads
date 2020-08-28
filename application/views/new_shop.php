<style>
	.box-quantity button {
		background-color: white;
		border: solid 0.1px rgb(220, 220, 220);
	}

	.box-quantity button:focus {
		background-color: black;
		color: white;
		outline: none;
	}

	.minus,
	.plus {
		display: inline-block;
		vertical-align: middle;
		text-align: center;
		background-color: white;
		border: none;
	}

	.minus:active,
	.plus:active {
		outline: solid 1px rgb(211, 211, 211);
	}

	.input-quantity {
		height: 20px;
		width: 30px;
		text-align: center;
		font-size: 16px;
		border: none;
		display: inline-block;
		vertical-align: middle;
		vertical-align: middle;
	}

	.input-quantity:focus {
		outline: solid 1px gray;
	}

	.thumbnail {
		height: 20%;
		width: 30%;
		display: block;
		padding: 2%;
	}

	.thumbnail img {
		height: 100%;
		width: 100%;
		border: solid 1px rgb(220, 220, 220);
		padding: 5% 10%;
	}

	.thumbnail img:focus {
		outline: solid 2px black;
	}

	.preview {
		width: 100%;
		display: inline-block;
	}

	.preview img {
		height: 100%;
		width: 100%;
		display: block;
	}

	.up,
	.down {
		background-color: rgb(220, 220, 220);
		text-decoration: none;
		cursor: pointer;
		border-radius: 50%;
		border: none;
	}

	.up:active,
	.down:active {
		background-color: gray;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		cursor: pointer;
		border-radius: 50%;
		outline: none;
	}
</style>

<!-- Shop -->
<section class="container-fluid px-5">
	<div class="row">
		<div class="col-md-6 pt-5">
			<div class="d-flex">
				<div class="thumbnail">
					<div class="thumbnails">
						<div class="">
							<img class="autofocus-img tab" id="" onclick="preview(this.src)" src="http://localhost/fivedads_revision/images/new-combo-2box-eva-1box-tck.jpg" alt="Image 1" tabindex="1">
						</div>
						<div class="pt-2">
							<img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Image 2" tabindex="2">
						</div>
						<div class="pt-2">
							<img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/silver-eva-tck.jpg" alt="Image 3" tabindex="3">
						</div>
						<div class="pt-2">
							<img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/10 boxex-tck.jpg" alt="Image 4" tabindex="4">
						</div>
					</div>
				</div>
				<div class="preview mx-3">
					<div>
						<img class="preview-image" src="" alt="Product Image">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 pt-5">
			<h4 class="product_name">EVA GLUTHATHIONE</h4>
			<hr style="border: solid 1px black">
			<h5 class="price">₱ 1,485.00</h5>
			<div class="box-quantity">
				<!-- <button class="one">1 BOX</button>
				<button class="two">2 BOXES</button>
				<button class="three">3 BOXES</button>
				<button class="more">5 BOXES + 1</button> -->
				<form method="POST" action="Pages.php" id="boxes-form">
					<!-- <input type="button" class="one" value="1 BOX">
					<input type="button" class="two" value="2 BOXES">
					<input type="button" class="three" value="3 BOXES">
					<input type="button" class="more" value="5 BOXES + 1"> -->
					<button class="one" type="submit">1 BOX</button>
					<button class="two">2 BOXES</button>
					<button class="three">3 BOXES</button>
					<button class="more">5 BOXES + 1</button>
				</form>
			</div>
			<div class="row py-3">
				<div class="col-md-3 my-2">
					<button class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
					<input class="input-quantity" type="text" value="1" />
					<button class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</div>
				<div class="col-md-9">
					<a href="cart" class="btn btn-dark btn-block text-white rounded-0 addtocart my-2">ADD TO CART</a>
					<small class="text">
						<i class="fa fa-check" aria-hidden="true"></i>
						Added to cart
						<span>
							<a href="">view cart </a>
							or
							<a href="">continue shopping</a>
						</span>
					</small>
				</div>
			</div>
			<a class="btn buy btn-primary btn-block rounded-0 text-white">BUY IT NOW</a>
			<div class="pt-5">
				<p>PRODUCT DETAILS</p>
				<hr class="px-0" style="border: solid 1px rgb(105,105,105)">
				<h6>WHAT IS EVA GLUTHATHIONE IN A SACHET?</h6>
				<br>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, unde porro, laborum sapiente eum commodi blanditiis fugit minus assumenda distinctio pariatur mollitia minima expedita officia dolorem voluptas inventore exercitationem. Quo!</p>
			</div>
		</div>
	</div>
</section>
<!-- End of Shop -->


<script>
	$(document).ready(function() {
		$('.minus').click(function() {
			var $input = $(this).parent().find('input');
			var count = parseInt($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});
		$('.plus').click(function() {
			var $input = $(this).parent().find('input');
			$input.val(parseInt($input.val()) + 1);
			$input.change();
			return false;
		});
	});

	$('.text').hide();
	$(document).ready(function() {
		$('.addtocart').on('click', function() {
			var text = $('.addtocart').text();
			if (text === "ADD TO CART") {
				$(this).html('THANK YOU');
				$('.text').show();
				$('.addtocart').prop('disabled', true);
				$('.buy').prop('disabled', true);

			} else {
				$(this).text('ADD TO CART');
				$('.text').hide();
			}
		});
	});

	$(document).ready(function() {
		$('.minus, .plus, .up, .down').focus(function() {
			this.blur();
		});
	});

	$(document).ready(function() {
		$('.autofocus-img').click();
	})

	$('.autofocus-img').focus();

	function preview(_src) {
		$source = _src;
		document.getElementsByClassName('preview-image')[0].src = $source;
	}

	$(document).ready(function() {
		$('.one').click(function() {
			source = document.getElementsByClassName('tab')[1].src
			document.getElementsByClassName('preview-image')[0].src = source;
		});
		$('.two').click(function() {
			source = document.getElementsByClassName('tab')[2].src
			document.getElementsByClassName('preview-image')[0].src = source;
		});
		$('.three').click(function() {
			source = document.getElementsByClassName('tab')[3].src
			document.getElementsByClassName('preview-image')[0].src = source;
		});
		$('.more').click(function() {
			source = document.getElementsByClassName('tab')[0].src
			document.getElementsByClassName('preview-image')[0].src = source;
		});
	});

	$('#boxes-form').submit(function(e) {
		e.preventDefault();
	});
</script>
