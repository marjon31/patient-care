<?php
	include'include/header.php';
?>

<div class="container">
	<div class="card">
		<hr>
		<h3><center><b>ADD ORDER</b></center></h3>
		<hr>
<div id="message"></div>
		<div class="container">
				<div class="form-group">
					<label for="patient">Select Patient :</label>
					<select id="patient" name="patient" class="form-control"> 
						<option value="">Select Patient</option>
						<!-- All in Patient -->
						<?php
							$object = new Controller;
							$stmt = $object->getAllInpatient();
							while ($row = $stmt->fetch()) {
								?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['id']." : ".ucfirst($row['firstname'])." ".ucfirst($row['lastname']); ?></option>
								<?php
							}
						?>
					</select>
				</div>
				<hr>
				<h4>Order :</h4>
				<div class="form-group">
					<label for="name">Name : </label><label id="warningName" class="badge badge-danger"></label>
					<input type="text" id="name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="quantity">Quantity : </label><label id="warningQuantity" class="badge badge-danger"></label>
					<input type="number" id="quantity" name="quantity" class="form-control">
				</div>
				<div class="form-group" align="right">
					<button id="selector" class="btn btn-primary">ADD TO SELECTION</button>
				</div>

				<hr>

				<h4>Order Selection:</h4>
				<div>
					<div class='row'>
						<div class="col">
							<h5>Name :</h5>
						</div>
						<div class="col">
							<h5>Quantity :</h5>
						</div>
					</div>
					<div id="selection"></div>
				</div>
				<div class="form-group" align="right">
					<button id='submitOrder' class="btn btn-success">SUBMIT</button>
				</div>
				
		</div>

	</div>
</div>

<?php
	include'include/footer.php';
?>