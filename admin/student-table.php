<?php session_start();?>
<?php include 'header.php';?>

  <!-- ======= Sidebar ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student Registration Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="student-table.php">Student Registration Table</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section" style="width: 1900px;">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <?php
               require ('config1.php');

               $sql = "SELECT `stu_id`, `sname`, `fname`, `surname`, `email`, `number`, `fathername`, `address`, `schoolname`, `standard`, `higher`, `tmark`, `omark`, `ppan`, `filename` FROM `student`";
              
               $result = mysqli_query($conn,$sql) or die ("query Unsccessful.");

               if(mysqli_num_rows($result)){
               ?>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Student Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Father's Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">School Name</th>
                    <th scope="col">Standard Passed</th>
                    <th scope="col">Mention Details if higher</th>
                    <th scope="col">Total marks</th>
                    <th scope="col">Obtained Marks</th>
                    <th scope="col">PPAN</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                 ?>
                <tr>
                   <!-- <th scope="row">1</th> -->
                    <td><?php echo $row['sname'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['surname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['fathername'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['schoolname'];?></td>
                    <td><?php echo $row['standard'];?></td>
                    <td><?php echo $row['higher'];?></td>
                    <td><?php echo $row['tmark'];?></td>
                    <td><?php echo $row['omark'];?></td>
                    <td><?php echo $row['ppan'];?></td>
                    <td><img src="./upload/<?php echo $row['filename']; ?>"  style="width: 100px;height: 100px;"></td>
                    <td><a href="student-update.php?id=<?php echo $row['stu_id'];?>"><i class="bi bi-pen"></a></i></td>
                    <td><a href="student-delete.php?id=<?php echo $row['stu_id'];?>"><i class="bi bi-trash"></a></i></td>
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

  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>
