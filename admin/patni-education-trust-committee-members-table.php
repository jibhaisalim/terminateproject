<?php session_start();?>
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committee Members Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="patni-education-trust-committee-members-table.php">Committee Members</a></li>
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
              <h5 class="card-title">Members Tables</h5>


              <div class="position-absolute top-0 end-0" style="margin-top:15px;margin-right:15px;">
               <label>
                 <select class="datatable-selector" id="yearSelect">
                  <option value="10" selected="">Select Year</option>
                    <!-- <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">2004</option> --> 
                  </select>
                </label>
                <button type="button" class="btn btn-primary">
                  <a href="patni-education-trust-committee-members-add.php" class="link-light">Add Members</a>
                </button>
                </div>

                 <?php
               require ('config1.php');

               $sql = "SELECT m.member_id, m.name, m.contact, m.year,m.filename,c.designation_name FROM members m LEFT JOIN category c ON m.designation = c.d_id WHERE committee_id = '3'";              
              
               if(isset($_GET['year']) && !empty($_GET['year'])){
                $sql .= " AND year = '".$_GET['year']."'";
             }
               $result = mysqli_query($conn,$sql) or die ("query Unsccessful.");

               if(mysqli_num_rows($result)){
               ?>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Member name</th>
                    <th scope="col">Member Contact</th>
                    <!-- <th scope="col">Year</th> -->
                    <th scope="col">Member Designation</th>
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
                    <!-- <th scope="row">
                      <?php echo $row['member_id'];?>
                    </th> -->
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <!-- <td><?php echo $row['year'];?></td> -->
                    <td><?php echo $row['designation_name'];?></td>
                    <td><img src="./upload/<?php echo $row['filename']; ?>"  style="width: 100px;height: 100px;"></td>
                    <td><a href="patni-education-trust-committee-members-delete.php?id=<?php echo $row['member_id'];?>" style="height:50px;width:50px;"><i class="bi bi-trash"></a></i></td>
                    <td><a href="patni-education-trust-committee-members-update.php?id=<?php echo $row['member_id'];?>"><i class="bi bi-pen"></a></i></td>
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
<script>
  $('#yearSelect').change(function(){
    var year = $(this).val();
    var url = window.location.href;
    window.location.href = '?year='+year;
    console.log(11111,year);
  })

  document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.getElementById("yearSelect");

  var currentYear = new Date().getFullYear();
  var startYear = 1950;

  for (var year = startYear; year <= currentYear; year++) {
    var option = document.createElement("option");
    option.value = year;
    option.text = year;
    selectElement.appendChild(option);
  }
});

</script>
  <?php include 'footer.php';?>
