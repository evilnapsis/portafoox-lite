<?php
$total = 0;
$pm  = PaymethodData::getById($_POST["paymethod_id"]);
$iva = ConfigurationData::getByPreffix("general_iva")->val;
$coin_symbol = ConfigurationData::getByPreffix("general_coin")->val;
$ivatxt = ConfigurationData::getByPreffix("general_iva_txt")->val;

?>
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<?php if(!isset($_SESSION["client_id"])):?>
				<p class="alert alert-danger">Debes registrarte e iniciar sesion para proceder.</p>
			<?php endif; ?>
		</div>
</div>

	<div class="row">

		<div class="col-md-12">
			<?php if(isset($_SESSION["cart"]) && count($_SESSION["cart"]>0)):?>
		<h2>Confirmacion de compra</h2>
		<h4>Metodo de pago: <b><?php echo $pm->name; ?></b></h4>
<table class="table table-bordered">
<thead>
	<th>Codigo</th>
	<th>Producto</th>
	<th>Cantidad</th>
	<th>Precio Unitario</th>
	<th>Total</th>
</thead>
<?php 
foreach($_SESSION["cart"] as $s):?>
<?php $p = ProductData::getById($s["product_id"]); ?>
<tr>
<td><?php echo $p->code; ?></td>
<td><?php echo $p->name; ?></td>
<td style="width:100px;">
<?php echo $s["q"]; ?>
</td>
<td><h4><?php echo $coin_symbol; ?> <?php echo $p->price; ?></h4> </td>
<td><h4><?php echo $coin_symbol; ?> <?php echo $p->price*$s["q"]; ?></h4> </td>
<?php
$total += $s["q"]*$p->price;
 endforeach; ?>
</tr>
</table>


<div class="row">
<div class="col-md-5">

</div>
<div class="col-md-5 col-md-offset-2">
	<table class="table table-bordered">
		<tr>
			<td>Subtotal</td><td><?php echo $coin_symbol; ?> <?php echo number_format($total-($total*($iva/100)),2,".",","); ?></td>
		</tr>
		<tr>
			<td><?php echo $ivatxt; ?></td><td><?php echo $coin_symbol; ?> <?php echo number_format($total*($iva/100),2,".",","); ?></td>
		</tr>
		<?php if(isset($_SESSION["coupon"])):
$coupon = CouponData::getById($_SESSION["coupon"]);
		$discount = $coupon->val;
		?>
		<tr>
			<td>SubTotal</td><td><?php echo $coin_symbol; ?> <?php echo number_format($total,2,".",","); ?></td>
		</tr>
		<tr>
			<td>Descuento: <b><?php echo $coupon->name;?></b></td><td><?php echo $coin_symbol; ?> <?php echo number_format($coupon->val,2,".",","); ?></td>
		</tr>
		<tr>
			<td>Total</td><td><?php echo $coin_symbol; ?> <?php echo number_format($total-$discount,2,".",","); ?></td>
		</tr>
	<?php else:?>
		<tr>
			<td>Total</td><td><?php echo $coin_symbol; ?> <?php echo number_format($total,2,".",","); ?></td>
		</tr>

	<?php endif; ?>

	</table>
<br>
			<?php if(isset($_SESSION["client_id"])):?>
<form action="index.php?action=buy" method="post">
<input type="hidden" class="form-control" required name="paymethod_id" value="<?php echo $_POST["paymethod_id"];?>">
<button class="btn btn-primary btn-block">Proceder a Comprar</button>
</form>
<?php endif; ?>
<br>
<a href="index.php?view=mycart" class="btn btn-warning btn-block">Regresar al Carrito</a>
<br><a href="index.php?action=clearcart" class="btn btn-danger btn-block">Cancelar</a>
</div>
</div>



			<?php else:
			?>
				<div class="jumbotron">
				<h2>No hay productos</h2>
				<p>No ha agregado productos al carrito.</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>