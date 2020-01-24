<?php 
	include 'include/header.php';
  $object = new Controller;
  $stmt = $object->getOrderById($_GET['id']);
?>
<div class="container">
	<div class="card">
		<div class="container">
<hr>
<h3><center><b> ORDER VIEWING </b></center></h3>
<hr>
      <?php
      $count = 1;
        if($row = $stmt->fetch()){
          ?>  
            <div class="row">
              <div class="col"> 
                <h4>Order #: <?php echo $row[0]; ?><h4>
              </div>
              <div class="col"> 
                <h4>Name: <?php echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']); ?></h4>
              </div>
              <div class="col"> 
                
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <strong>#</strong>
              </div>
              <div class="col">
                <strong>Name</strong>
              </div>
              <div class="col">
                <strong>Quantity</strong>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <?php echo $count; ?>
              </div>
              <div class="col">
                <?php echo ucfirst($row['name']); ?>
              </div>
              <div class="col">
                <?php echo $row['quantity']; ?>
              </div>
            </div>
          <?php
          $count++;
          while($rows = $stmt->fetch()){
            ?>  
              <div class="row">
                <div class="col">
                  <?php echo $count; ?>
                </div>
                <div class="col">
                  <?php echo ucfirst($rows['name']); ?>
                </div>
                <div class="col">
                  <?php echo $rows['quantity']; ?>
                </div>
              </div>
            <?php
            $count++;
          }
        }

      ?>

		</div>
	</div>
</div>
<?php 
	include 'include/footer.php';
?>