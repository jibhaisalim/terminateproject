<?php session_start();?>
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Report Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="patni-education-trust-report-table.php">Report Tables</a></li>
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
              <h5 class="card-title">Report Tables</h5>


              <div class="position-absolute top-0 end-0" style="margin-top:15px;margin-right:15px;">
                <button type="button" class="btn btn-primary">
                  <a href="patni-education-trust-pdf-add.php" class="link-light">Add Report</a>
                </button>
                </div>


                 <?php
               require ('config1.php');

               $sql = "SELECT pid,committee_id,year,filename FROM report WHERE committee_id='3'";
              
               $result = mysqli_query($conn,$sql) or die ("query Unsccessful.");

               if(mysqli_num_rows($result)){
               ?>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Pdf Report</th>
                    <th scope="col">Year</th> 
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>   
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                 ?>
                  <tr>
                    <td><iframe  src="./rpdf/<?php echo $row['filename']; ?>" style="width: 100px;height: 100px;"></iframe></td>
                    <td><?php echo $row['year'];?></td>
                    <td><a href="patni-education-trust-pdf-delete.php?id=<?php echo $row['pid'];?>"><i class="bi bi-trash"></a></i></td>
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

  </main><!-- End #main -->

  <?php include 'footer.php';?>
