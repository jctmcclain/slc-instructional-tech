<?php
 
$URL = "myresource.json";
$jsonstring = file_get_contents($URL);
$json = json_decode($jsonstring, true);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juniata College - Statton Learning Commons - <?php echo($json['instructionaltech']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body> 
<div class="container">
  <div class="row">
        <div class="col-12">
                <img src="/statton-learning-commons/odl/projects/images/JuniataCollegeBanner.png" alt="Juniata College Banner"/>
        </div>
  </div>
  <div class="row">
    <div class="col-12">
	   <h1 class="text-center mt-4 mb-5">Statton Learning Commons Equipment</h1>
	   <?php echo('<h3>' . $json['instructionaltech'] . '</h3>'); ?>
	</div>
  </div>
<?php 
/*
foreach($json['courses'] as $course) {
	$mgcrsenum = $course['mergedcrsenum'];
        $mgcrsenme = $course['mergedcrsenme'];	
    foreach($course['childcourses'] as $kiddie){
      echo('<tr>');
      echo('<td>' . $kiddie['registrarnme'] . '</td>');
      echo('<td>' . $kiddie['registrarnum'] . '</td>');
      echo('<td>' . $mgcrsenme . '</td>');
      echo('<td>' . $mgcrsenum . '</td>');
      echo('</tr>');
    }
}
*/
?>
<?php foreach($json['artifacts'] as $artifact) { ?>
 <div class="row"> 
 	<div class="col-md-6"><img src="../assets/<?php echo($artifact['thumbnail'])?>" width="100" alt="image or camera thumbnail"/></div>
 	<div class="col-md-6"><a href="<?php echo($artifact['docref'])?>" class="btn btn-info">Learn More</a></div>
 </div>
 <div class="row">
 	<div class="col-md-3"><?php echo($artifact['id'])?></div>
 	<div class="col-md-3"><?php echo($artifact['title'])?></div>
 	<div class="col-md-3"><?php echo($artifact['description'])?></div>
 </div>
 <div class="row">
	<div class="col-12">
		<hr/>
	</div>
 </div>
<?php } ?>
	<div class="row">
		<div class="col-12">
		<a href="../index.php">Return to Instructional Resources Page</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<p style="text-align:right">
			Developed by the<br/>
			Office of Digital Learning - Statton Learning Commons &amp;<br/>
			Information Technology Services<br/>
			Juniata College<br/>
			</p>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
