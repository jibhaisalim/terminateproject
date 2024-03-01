<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.gstatic.com" rel="preconnect"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
</head>

<style> .card-bod img {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
  height:100px;
}


.card-bode{
  position: absolute;
  left: 220px;
  top: 8px;
}

.card-bode b{
  position: absolute;
  top: 30px;
  left:100px;
}


.card-body img{
  position: relative;
  left: 8px;
  }
</style>

<?php
                require ('config1.php');
                
                 $stud_id = $_GET ['id'];
                // $query = "SELECT * FROM student WHERE stu_id={$stud_id}";
				$query = $conn->query("SELECT * FROM `student` WHERE stu_id={$stud_id}");
				while($fetch = $query->fetch_array()){
					
			?>   

<body>
  <!-- ======= Header ======= -->
    <section class="section">
      <div class="row">
        <div class="card">
        <div class="card-body">
           <img src="assets/img/logo.png" alt="" height="100px">
          </div>
            <div class="card-bode">
               <h5 class="card-title" >Patni Education Trust Student Registration Form</h5>
                <b style="color:blue";>Date Prepared:
	             <?php
		          $date = date("Y-m-d", strtotime("+6 HOURS"));
		          echo $date;
	             ?>
                 </b>
               </div>
               <div class="card-bod">
               <!-- <img src="upload/<?php echo $fetch['filename'];?>"> -->
            </div>
        </div>
    </div> 
</section>





<section class="section">

<div class="col-md-6">

   <label for="inputText" class="form-label"><strong>Student Name</strong></label>
   <input type="text" name="sname" class="form-control" id="inputstudent" value="<?php echo $fetch['sname']?>" required>
 

   <label for="inputText" class="form-label"><strong>Father Name</strong></label>
   <input type="text" name="fname" class="form-control" id="inputlastname" value="<?php echo $fetch['fname'];?>" required>
 
   <label for="inputText" class="form-label"><strong>Surname</strong></label>
   <input type="text" name="surname" class="form-control" id="inputname" value="<?php echo $fetch['surname'];?>" required>
 

   <label for="inputText" class="form-label"><strong>Email</strong></label>
   <input type="email" name="email" class="form-control" id="inputEmail4" value="<?php echo $fetch['email'];?>" required>


   <label for="inputText" class="form-label"><strong>Phone number</strong></label>
   <input type="text" name="number" class="form-control" id="inputname" maxlength="10" minlength="10" value="<?php echo $fetch['number'];?>" required>
 

   <label for="inputText" class="form-label"><strong>Father's Full Name</strong></label>
   <input type="text" name="fathername" class="form-control" id="inputEmail4" value="<?php echo $fetch['fathername'];?>"  required>


   <label for="inputAddress" class="form-label"><strong>Address</strong></label>
   <input type="text" name="address" class="form-control" id="inputAddress" value="<?php echo $fetch['address'];?>" placeholder="1234 Main St" required>

   <label for="inputAddress2" class="form-label"><strong>School Name</strong></label>
   <input type="text" name="schoolname" class="form-control" id="inputAddress2" value="<?php echo $fetch['schoolname'];?>" placeholder="school name" required>


   <label for="inputAddress" class="form-label"><strong>Mention Details if higher</strong></label>
   <input type="text" name="higher" class="form-control" id="inputAddress" value="<?php echo $fetch['higher'];?>" placeholder="B.Tech/B.com,etc" required>


   <label for="inputCity" class="form-label"><strong>Total marks</strong></label>
   <input type="text" name="tmark" class="form-control" id="inputCity" value="<?php echo $fetch['tmark'];?>" required>


   <label for="inputCity" class="form-label"><strong>Obtained Marks</strong></label>
   <input type="text" name="omark" class="form-control" id="inputCity" value="<?php echo $fetch['omark'];?>" required>
 
   <label for="inputCity" class="form-label"><strong>PPAN</strong></label>
   <input type="text" name="ppan" class="form-control" id="inputCity" value="<?php echo $fetch['ppan'];?>" required>

   <!-- <label for="inputCity" class="form-label">Photo</label> -->
   <!-- <input class="form-control" type="file" id="formFile" name="uploadfile">  -->
   <!-- <input type="hidden" name="old_image" value="<?php echo $fetch['filename'];?>">   -->

</div>


              <?php } ?>         

    </section>


 
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="assets/vendor/chart.js/chart.umd.js"></script> -->
  <!-- <script src="assets/vendor/echarts/echarts.min.js"></script> -->
  <!-- <script src="assets/vendor/quill/quill.min.js"></script> -->
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <!-- <script src="assets/vendor/tinymce/tinymce.min.js"></script> -->
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->

</body>

<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>

</html>