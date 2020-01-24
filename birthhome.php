
<?php 
	include 'include/header.php';
?>
<style>
	
	h3{
		text-align: center;
	}
	
</style>
<div class="page-body" style="padding-top: 5px; padding-left: 50px; padding-right: 50px; padding-bottom: 20px;">
		<h3> Birth Home Page </h3>
	<hr>
	<div class="form-group">
		<center>
			 <table class="table table-responsive table-striped table-hover" >
				<tr>
					<td><a href="birth.php" title="ADD" class="btn btn-success" value="ADD" style="float: ;">ADD</a></td>
					<td><a href="birth.php" title="UPDATE" class="btn btn-success" value="UPDATE" style="float: ;">UPDATE</a></td>
					<td><a href="birth.php" title="SUBMIT" class="btn btn-success" value="SUBMIT" style="float: ;">SUBMIT</a></td>
				</tr>
			</table>
		</center>	
	</div>
	<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">registered</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  </tbody>
