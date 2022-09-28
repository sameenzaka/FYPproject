
<?php 
include "connection.php";


$sql = "SELECT * FROM addhouse where description like '%".$_POST["name"]."%' OR location like '%".$_POST["name"]."%' OR property_type like '%".$_POST["name"]."%'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($_POST["name"]){
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
?>
<div id="user"><a href="property-single.php?id=<?php echo $row['house_id']; ?>" ><img src="../seller/house-images/<?php echo $row["image1"];?>" alt="" width="50" height="50" /> &nbsp; <span> <?php echo $row["description"]?></span><br><span> <?php echo $row["property_type"]?></span> 
</div>
<?php
}}
}
?>
<?php
$sql = "SELECT * FROM addplot where description like '%".$_POST["name"]."%' OR location like '%".$_POST["name"]."%'  OR property_type like '%".$_POST["name"]."%'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($_POST["name"]){
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
?>
<div id="user"><a href="property-single-plot.php?id=<?php echo $row['plot_id']; ?>" ><img src="../seller/plot-images/<?php echo $row["image1"];?>" alt="" width="50" height="80" /> &nbsp; <span> <?php echo $row["description"]?></span><br><span> <?php echo $row["property_type"]?></span> 
</div>
<?php
}}
}
?>

