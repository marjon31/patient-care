<?php 
	include 'include/header.php';
?>

<div class="container">
	<div class="card">
		<div class="container">
<form action="includes/insert.php" method="POST">
<hr>
<h3><center> <b> BIRTH REGISTRATION  </b> </center></h3>
<hr>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="fname"> Given Name</label>
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
				<label for="lname"> Surname </label>
				<input type="text" name="lname" id="lname" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
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
				<label for="bday"> Date of birth </label>
				<input type="date" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Place of birth </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="nationality"> Type of birth </label>
				<select name="gender" class="form-control">
					<option value="#"> Single </option>
					<option value="#"> Twin </option>
					<option value="#"> Three or more </option>
				</select>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="nationality"> If multiple birth, child was </label>
				<select name="gender" class="form-control">
					<option value="#"> 1st </option>
					<option value="#"> 2nd </option>
					<option value="#"> 3rd </option>
					<option value="#"> 4th, ect.  </option>
				</select>
			</div>
		</div>
		<div class="col">
		</div>
	</div>
<hr><h5><center>MOTHER</center></h5><hr>
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
				<label for="bday"> Nationality </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Religion </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Usual Occupation </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="#"> Age </label>
				<input type="text" name="#" id="#" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
<hr><h5><center>FATHER</center></h5><hr>
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
				<label for="bday"> Nationality </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>	
		<div class="col">
			<div class="form-group">
				<label for="bplace"> Religion </label>
				<input type="text" name="bplace" id="bplace" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="bday"> Usual Occupation </label>
				<input type="text" name="bday" id="bday" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="#"> Age at the time of this birth </label>
				<input type="text" name="#" id="#" class="form-control" placeholder="required" required="">
			</div>
		</div>
	</div>
<hr><h5><center>INFORMATION</center></h5><hr>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="contactNumber"> Weight at birth (in grams) </label>
				<input type="ggrams" name="contactNumber" id="contactNumber" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="address"> Birth order of child (1st, 2nd, 3rd ect.) </label>
				<input type="text" name="address" id="address" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="address"> Total number of children born alive </label>
				<input type="text" name="address" id="address" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="address"> How many children are now living including this birth? </label>
				<input type="text" name="address" id="address" class="form-control" placeholder="required" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="address"> How many children were born alive but are now dead? </label>
				<input type="text" name="address" id="address" class="form-control" placeholder="required" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group" style="width: 40%;">
				<label for="nationality"> Attendant at birth </label>
				<select name="gender" class="form-control">
					<option value="#"> Physician </option>
					<option value="#"> Nurse </option>
					<option value="#"> Midwife </option>
					<option value="#"> Hilot </option>
					<option value="#"> Others </option>
				</select>
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
<?php
	include 'include/footer.php';
?>