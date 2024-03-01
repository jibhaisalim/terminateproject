
<?php
require ('config.php');

function processDrpdown($selectedVal) {
    echo "Selected value in php ".$selectedVal;
}        

$sql = "SELECT m.member_id, m.name, m.contact, m.year,m.filename,c.designation_name FROM members m LEFT JOIN category c ON m.designation = c.d_id WHERE committee_id = '6'";

if(isset($_POST['dropdownValue']) && !empty($_POST['dropdownValue'])){
    $sql .= " AND year = '".$_POST['dropdownValue']."'";
 }

$result1 = $conn->query($sql);
?>
 <?php 
 echo '<div class="row">';
   while($row = mysqli_fetch_assoc($result1)){?>
  <div class="col-lg-3 col-md-6">
     <div class="member">
       <div class="pic"><img src="admin/upload/<?php echo $row['filename']; ?>" alt="" style="width: 516px;height: 387px;"></div>
       <div class="details" style="height: 100px;">
       <h4><?php echo $row['name']; ?></h4>
       <span><?php echo $row['designation_name']; ?></span>
       </div>
     </div>
   </div>          
<?php }?>
</div>