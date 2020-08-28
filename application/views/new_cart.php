<style>
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

	input {
		height: 20px;
		width: 30px;
		text-align: center;
		font-size: 16px;
		border: none;
		display: inline-block;
		vertical-align: middle;
		vertical-align: middle;
	}

	input:focus {
		outline: solid 1px gray;
	}
</style>
<title></title>
</head>

<body>
	<section class="container">
		<div class="container pt-5">
			<h4>Jane Doe's Cart</h4>
			<table class="table text-right">
				<thead>
					<tr>
						<th class="py-3">Product</th>
						<th class="py-3">Quantity</th>
						<th class="py-3">Price</th>
						<th class="py-3">Total</th>
					</tr>
				</thead>
				<tbody>
					<tr class="item">
						<td><img src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Product Image" height="100" width="100" class="pull-left">
							<span>
								Eva Gluthathione
							</span>
							<br><br>
							<button class="btn btn-sm btn-outline-danger remove">Remove</button>
						</td>
						<td class="quantity">
							<div class="container">
								<button class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
								<input type="text" value="1" />
								<button class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
							</div>
						</td>
						<td>₱6,500.00</td>
						<td>₱6,500.00</td>
					</tr>
				</tbody>
			</table>
			<hr class="" style="border-top:0.1px solid #DCDCDC;">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="comment">Add a note to your order</label>
						<textarea class="form-control" rows="2" cols="35%" id="note" style="width:auto"></textarea>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="float-right">
						<p class="font-weight-bold">Grand Total<span class="text-primary pull-right">₱6,500.00</span></p>
						<p><em class="">Shipping & taxes calculated at checkout</em></p>
						<p class="font-weight-bold pull-right">The cart expires in <span class="text-danger">01:22:29</span></p>
					</div>
					<div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<a type="button" class="btn btn-outline-dark ">CONTINUE SHOPPING</a>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-5 text-right">
					<a href="checkout" type="button" class="btn btn-primary "><i class="fa fa-check-circle pr-1" aria-hidden="true"></i>PROCEED TO CHECKOUT</a>
				</div>
			</div>
		</div>
	</section>


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

		$(document).ready(function() {
			$('.minus, .plus').focus(function() {
				this.blur();
			})
		});

		$(document).ready(function() {
			$(".remove").click(function() {
				$(".item").remove();
			});
		});
	</script>
