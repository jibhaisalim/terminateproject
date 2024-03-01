<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Events Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-co-operative-credit-society-ltd-upcoming-event-update.php">Events Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">UpComing Events Form</h5>
              <?php

require ('config1.php');

$mem_id = $_GET ['id'];

$sql = "SELECT  eid,title,sponser,address,date,time,guest_name,filename  FROM even WHERE eid={$mem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>


  

              <!-- General Form Elements -->
              <form  action="co-event-updata.php" method="POST" enctype="multipart/form-data">

              <div class="row mb-3">
                <label for="input-hidden" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <input type="hidden" name="eid" class="form-control" value="<?php echo $row['eid'];?>" placeholder=""> 
              </div>
             </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Sponser</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sponser" value="<?php echo $row['sponser'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>">
                  </div>
                </div>
            
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" value="<?php echo $row['date'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="time" value="<?php echo $row['time'];?>">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Guest Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="guest_name" value="<?php echo $row['guest_name'];?>">
                  </div>
                </div>


                <div class="row mb-3">
                 <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="uploadfile">
                <img  src="upload/<?php echo $row['filename'];?>" height="150px" style="padding-top: 20px;">
                <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                              </div>
                            </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Save</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="update" value="update">Save</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
          <?php }}?>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>
