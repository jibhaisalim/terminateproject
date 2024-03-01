<?php session_start();?>
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Event Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="qamar-free-library-upcoming-event-table.php">Add Event Tables</a></li>
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
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Event Tables</h5>


              <div class="position-absolute top-0 end-0" style="margin-top:15px;margin-right:15px;">
                <button type="button" class="btn btn-primary">
                  <a href="qamar-free-library-upcoming-event-add.php" class="link-light">Add Event</a>
                </button>
                </div>

                 <?php
               require ('config1.php');

               $sql = "SELECT eid,title,sponser,address,date,time,guest_name,filename FROM even WHERE committee_id='5'";

               $result = mysqli_query($conn,$sql) or die ("query Unsccessful.");

               if(mysqli_num_rows($result)){
               ?>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Sponser</th>
                    <th scope="col">Address</th> 
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Guest Name</th>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>

                  </tr>
                </thead>
                <tbody>   
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                 ?>
                  <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['sponser'];?></td>
                    <td><?php echo $row['address'];?></td> 
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['guest_name'];?></td>
                    <td><img src="./upload/<?php echo $row['filename']; ?>"  style="width: 100px;height: 100px;"></td>
                    <td><a href="qamar-free-library-upcoming-event-delete.php?id=<?php echo $row['eid'];?>" style="height:50px;width:50px;"><i class="bi bi-trash"></a></i></td>
                    <td><a href="qamar-free-library-upcoming-event-update.php?id=<?php echo $row['eid'];?>"><i class="bi bi-pen"></a></i></td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
<?php
                }

else{
  echo "<h2>No Record Found</h2>";
  }
mysqli_close($conn);
?>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  
  <!-- End #main -->

  <?php include 'footer.php';?>
