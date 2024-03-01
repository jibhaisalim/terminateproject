<?php session_start();?>
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Birth Registration Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="birth_table.php">Birth Registration </a></li>
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
              <h5 class="card-title">Birth Registration Tables</h5>


              <div class="position-absolute top-0 end-0" style="margin-top:15px;margin-right:15px;">
                <!-- <button type="button" class="btn btn-primary">
                  <a href="#" class="link-light">Add Event</a>
                </button> -->
                </div>

                 <?php
               require ('config1.php');

               $sql = "SELECT * FROM `birthregi` WHERE 1";

               $result = mysqli_query($conn,$sql) or die ("query Unsccessful.");

               if(mysqli_num_rows($result)){
               ?>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">બચ્ચા નું નામ</th>
                    <th scope="col">વાલિદ નું નામ</th>
                    <th scope="col">વાલિદહ નું નામ</th> 
                    <th scope="col">દાદા નું નામ</th>
                    <th scope="col">અટક</th>
                    <th scope="col">ઠેકાણુ</th>
                    <th scope="col">જન્મ નું સ્થળ</th>
                    <th scope="col">જન્મ તારીખ</th>
                    <th scope="col">PPAN Number</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>   
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                 ?>
                  <tr>
                    <td><?php echo $row['cname'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['mname'];?></td> 
                    <td><?php echo $row['gname'];?></td>
                    <td><?php echo $row['surname'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['baddress'];?></td>
                    <td><?php echo $row['bdate'];?></td>
                    <td><?php echo $row['ppan'];?></td>
                    <td><a href="birth_edit.php?id=<?php echo $row['bir_id'];?>"><i class="bi bi-pen"></a></i></td>
                    <td><a href="birth_delete.php?id=<?php echo $row['bir_id'];?>"><i class="bi bi-trash"></a></i></td>
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
