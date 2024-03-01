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
                
                $birt_id = $_GET ['id'];
                // $query = "SELECT * FROM student WHERE stu_id={$stud_id}";
				$query = $conn->query("SELECT * FROM `birthregi` WHERE bir_id={$birt_id}");
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
               <h5 class="card-title" >Patni Sunnat Jammat Birth Registration Form</h5>
                <b style="color:blue";>Date Prepared:
	             <?php
		          $date = date("Y-m-d", strtotime("+6 HOURS"));
		          echo $date;
	             ?>
                 </b>
               </div>
               <div class="card-bod">
            </div>
        </div>
    </div> 
</section>





<section class="section">

<div class="col-md-6">

  <label for="inputText" class="form-label"><strong>Child Name (બચ્ચા નું નામ)</strong></label>
  <input type="text" name="cname" class="form-control" id="inputstudent" value="<?php echo $fetch['cname'];?>" required>


  <label for="inputText" class="form-label"><strong>Father Name (વાલિદ નું નામ)</strong></label>
  <input type="text" name="fname" class="form-control" id="inputlastname" value="<?php echo $fetch['fname'];?>" required>

  <label for="inputText" class="form-label"><strong>Mother Name (વાલિદહ નું નામ)</strong></label>
  <input type="text" name="mname" class="form-control" id="inputname" value="<?php echo $fetch['mname'];?>" required>


  <label for="inputText" class="form-label"><strong>Grandfather Name (દાદા નું નામ)</strong></label>
  <input type="text" name="gname" class="form-control" id="inputname" value="<?php echo $fetch['gname'];?>" required>

  <label for="inputText" class="form-label"><strong>Surname (અટક)</strong></label>
  <input type="text" name="surname" class="form-control" id="inputname" value="<?php echo $fetch['surname'];?>" required>

  <label for="inputText" class="form-label"><strong>Address (ઠેકાણુ)</strong></label>
  <input type="text" name="address" class="form-control" id="inputname" value="<?php echo $fetch['address'];?>" required>

  <label for="inputAddress" class="form-label"><strong> Birth Place (જન્મ નું સ્થળ)</strong></label>
  <input type="text" name="baddress" class="form-control" id="inputAddress"  value="<?php echo $fetch['baddress'];?>" required>

  <label for="inputAddress2" class="form-label"><strong>Birth Date (જન્મ તારીખ)</strong></label>
  <input type="date" name="bdate" class="form-control" id="inputAddress2" value="<?php echo $fetch['bdate'];?>" required>
 

  <label for="inputAddress" class="form-label"><strong>PPAN Number</strong></label>
  <input type="text" name="ppan" class="form-control" id="inputAddress" value="<?php echo $fetch['ppan'];?>" required>



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