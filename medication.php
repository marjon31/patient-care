<?php 
	include 'index.php';
?>

<div class="page-body" style="padding-top: 5px; padding-left: 50px; padding-right: 50px; padding-bottom: 20px;">
  <br>
  <div class="form-group">
		<input class="form-control" type="text" style="width:30%; height: 33px; float:right;" placeholder="Search...">
  </div>
	<hr>
		<h4><b> MEDICATION MANAGEMENT  </b></h4>
	<hr>
<form action="includes/insert.php" method="POST">
<div class="row">
	<div class="col">
		<div class="form-group" style="width:30%;">
			<label for="fname">  Patient Name </label>
			<input type="text" name="fname" id="fname" class="form-control" placeholder="required" required>
		</div>
	</div>
</div>

<table class="table table-striped">
	<thead>
		<tr>
		<th> Date Started </th>
		<th> Dose Given </th>
		<th> Time </th>
		<th> Reason for taking </th> 
		</tr>
	</thead>
	<tbody>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<tr>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<tr>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<tr>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<tr>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<tr>
	</tbody>
</table>