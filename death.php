<?php 
	include 'include/header.php';
?>


<div class="container">
	<div class="card">
		<div class="container">

<form action="includes/insert.php" method="POST">
<hr>
<h3><center> <b> DEATH REGISTRATION  </b> </center></h3>
<hr>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="fname"> First Name</label>
				<input type="text" name="fname" id="fname" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="mname"> Middle Name </label>
				<input type="text" name="mname" id="mname" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="lname"> Last Name </label>
				<input type="text" name="lname" id="lname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Age </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
			<div class="col">
			<div class="form-group">
				<label for="nationality"> Gender </label>
				<select name="gender" class="form-control">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bday"> Civil Status </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Date of birth </label>
				<input type="date" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bday"> Date of Death </label>
				<input type="date" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Place of Death </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Citizenship </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Religion </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Occupation </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Residence </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bplace">  Father Name </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Mother Name </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
<hr><h4><center> MEDICAL RECORD </center></h4><hr>
	<p><b>Causes of Death:</b></p>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="fname"> Immediate Cause </label>
				<input type="text" name="fname" id="fname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="mname"> Antecedent Cause </label>
				<input type="text" name="mname" id="mname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<div class="form-group">
				<label for="lname"> Underlying Cause </label>
				<input type="text" name="lname" id="lname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<p><b>Death bt External Cause:</b></p>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="fname"> Manner of death </label>
				<input type="text" name="fname" id="fname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="fname"> Place of Occurence of External Cause </label>
				<input type="text" name="fname" id="fname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
<hr>
	<p> <b> Legal Department: </b></p>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Name </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Position </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Address </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
<p> <b> Certificate of informant: </b></p>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Name </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Relationship </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Address </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
<p> <b> Prepared by: </b></p>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Name </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Position </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Date </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<hr>
	<div class="form-group">
		<input type="submit" name="submitApplicant" class="btn btn-success" value="SUBMIT" style="float: right;">
	</div>
</form>
<br><br><br><br>
</div>
		</div>
	</div>
</div>
<?php
	include 'include/footer.php';
?>