
<?php session_start();?>
<?php include 'header.php';?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Contact Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active"><a href="patni-co-operative-credit-society-ltd-contact.php">Contact Form</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

 
<?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>


<section class="section">
  <div class="row">
     <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contact Form</h5>
          <?php

require ('config1.php');

$sql= "SELECT * FROM contact WHERE sid=2";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
          <!-- Vertical Form -->
          <form class="row g-3" action="co-contact-update.php" method="POST">
          
          <div class="col-12">
              <label for="inputAddress" class="form-label"></label>
              <input type="hidden" name="sid" class="form-control" value="<?php echo $row['sid'];?>"> 
            </div>
        
           <div class="col-12">
              <label for="inputAddress" class="form-label">Description</label>
              <textarea class="form-control" name="description" style="height: 100px"><?php echo $row['description'];?></textarea>
            </div>

           <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" value="<?php echo $row['address'];?>">
            </div>

            <div class="col-12">
              <label for="inputNanme4" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="inputNanme4" name="phone_number" value="<?php echo $row['phone_number'];?>" pattern="[1-9]{1}[0-9]{9}"/>
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="submit">Save</button>
            </div>
          </form>
    <!-- Vertical Form -->
     <?php }
    }
    ?>

        </div>
      </div>

     

      

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include 'footer.php';?>
