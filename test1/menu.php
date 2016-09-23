<!-- seperat php fil med menuen, der sørger for at det samme bliver vist på alle sider, uden at skulle gentage koden - på denne måde undgår man fejl ved f.eks. opdateringer -->

<!-- link til stylesheet som styler det aktive link i menuen -->
<link rel="stylesheet" type="text/css" href="style.css">

<?php
//echo $_SERVER['PHP_SELF'].PHP_EOL;
//echo basename($_SERVER['PHP_SELF']).PHP_EOL;

//funktion som gør at der bliver kigget på filnavnet for at afgøre hvilken side der er aktiv
$curpage = basename($_SERVER['PHP_SELF']);
echo $curpage.PHP_EOL;
?>
<!-- en test på den første side, for at vise at vores tidligere funktion fungerer -->
<?php if ($curpage == 'testing1.php') {echo 'class="active"';} ?>	

<!-- hele kodningen af menuen, inklusiv html of php - her bliver funktionen if brugt i forbindelse med objektet $curpage, for at gøre det muligt at vise brugeren hvilken side der er aktiv - echo 'class="active"' linker så til stylingen af det aktive link -->    
    <ul>
	<li><a href="testing1.php" <?php if ($curpage == 'testing1.php') {echo 'class="active"';} ?>>Page 1</a></li>
	<li><a href="testing2.php" <?php if ($curpage == 'testing2.php') {echo 'class="active"';} ?>>Page 2</a></li>
	<li><a href="testing3.php" <?php if ($curpage == 'testing3.php') {echo 'class="active"';} ?>>Page 3</a></li>
    <li><a href="testing4.php" <?php if ($curpage == 'testing4.php') {echo 'class="active"';} ?>>Page 4</a></li>
	</ul>