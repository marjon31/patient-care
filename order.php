<?php 
	include 'include/header.php';

?>
<div class="container">
	<div class="card">
		<div class="container">
<hr>
<h3><center><b> ORDER MANAGEMENT </b></center></h3>
<hr>
<a href="addOrder.php" class='btn btn-primary' style="float:right;">Add Order</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">#</th>
      <th scope="col">Order #</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Order created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

      $object = new Controller;
      $stmt = $object->getPatientOrders();
      $count = 1;
      while ($row = $stmt->fetch()) {
        ?>
              <tr align="center">
                <th scope="row"><?php echo $count; ?></th>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td>
                  <?php
                      $convert = new DateTime($row["created_at"]); //create datetime object with received data
                      $date = $convert->format('M d, Y'); 
                      $time = $convert->format('h:m A');
                      echo "<small><strong>Date:</strong> ".$date." <strong>Time:</strong> ".$time."</small>";
                  ?>  
                </td>
                <td><a href="order-view.php?id=<?php echo $row['0']; ?>" class="btn btn-primary badge">VIEW</a></td>
              </tr>
        <?php
        $count++;
      }
    ?>
  </tbody>
</table>


		</div>
	</div>
</div>
<?php 
	include 'include/footer.php';
?>