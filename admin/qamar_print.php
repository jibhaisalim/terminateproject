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

.card-bode h1{
  position: relative;
  left: 60px;
  top: 8px;
  font-weight: bold;
}

.card-bode h5{
  position: relative;
  left: 105px;
  top: 8px;
  font-weight: bold;
}


.card-bode b{
  position: relative;
  top: 05px;
  left:100px;
  font-weight: bold;
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
				$query = $conn->query("SELECT * FROM `qamar` WHERE q_id={$birt_id}");
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
               <h1 class="card-title">Qamar Free Library</h1>
                <b>Lal Mahal, Sodagarwada, Surat.</b>
                <h5 class="card-title">Membership Application</h5>
       </div>
      <div class="card-bod">
               <img src="upload/<?php echo $fetch['filename'];?>"> 
      </div>
        </div>
    </div> 
</section>





<section class="section">



<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>TO</strong></label>
</div>


<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>Mr. Owner. Secretary Sir</strong></label>
</div>


<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>Qamar Free Library Surat.</strong></label>
</div>


<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>Dear Sir,</strong></label>
</div>

<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>I, The undersigned, wish to become an Annual / Life Member of the Comer Free Library. My full details are below. I also agree to all current and future library rules. I guarantee that I will take proper care of the book/magazine that I take home to read and in case of any damage or loss, I will reimburse the amount you decide as damages.</strong></label>
</div>


<div class="col-md-6">
   <label for="inputText" class="form-label"><strong>My Details are as follows.</strong></label>
</div>



<div class="col-md-6">
   <label for="inputText" class="form-label">Full Name</label>
  <input type="text" name="fullname" class="form-control" id="inputstudent" value="<?php echo $fetch['fullname'];?>" required>
</div>


<div class="col-md-6">
  <label for="inputText" class="form-label">Phone number</label>
  <input type="text" name="number" class="form-control" id="inputname" value="<?php echo $fetch['number'];?>" maxlength="10" minlength="10" required>
</div>


<div class="col-12">
  <label for="inputText" class="form-label">Address</label>
  <input type="text" name="address" class="form-control" id="inputname" value="<?php echo $fetch['address'];?>" required>
</div>
 


<div class="col-md-6">
  <label for="inputAddress" class="form-label">PPAN Number</label>
  <input type="text" name="ppan" class="form-control" id="inputAddress" value="<?php echo $fetch['ppan'];?>" required>
</div>


<div class="col-md-6">
  <label for="inputAddress" class="form-label">Member PPAN Number</label>
  <input type="text" name="member_ppan" class="form-control" id="inputAddress" value="<?php echo $fetch['member_ppan'];?>" required>
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