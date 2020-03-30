<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--TITLE START-->
    <title>Personal Website</title>
    <!--TITLE END-->

    <!--CSS LINK START-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--CSS LINK END-->
    <!--FEVICON START-->
    
    <!--FEVICON END-->
</head>

<body>
    
     <?php
        $conn= mysqli_connect("localhost","root","","web_eng");
        $sqls=mysqli_query($conn, "SELECT * FROM product");
        $count=mysqli_num_rows($sqls);
        $rowpage=5;
        if (isset($_REQUEST['p'])) {
             $page=$_REQUEST['p'];
        }else{
             $page=1;
        }
       
        if ($page==0 || $page=='') {
            $page=1;
        }
        
        
        $p=$page*$rowpage;
        $sql="SELECT * FROM `product` limit ".$p.",".$rowpage;
        $run=mysqli_query($conn,$sql);
        while ($rs=mysqli_fetch_array($run)) {
            echo $rs['productName']."</br>";
        }
        
        $next=$page+1;
        $prev=$page-1;
      
        $pg=ceil($count/$rowpage);
        for($i=1; $i<$pg; $i++){
            echo '<span class="mr-2" style="cursor: pointer;" onclick="loadData('.$i.')">'.$i.'</span>';
        }
        echo "</br></br>";
        $check=$p+$rowpage;
        if($page>1){
            echo '<span class="mr-2" style="cursor: pointer;" onclick="loadData('.$prev.')">Prev</span>';
        }
        if($count>$check){
            echo '<span class="mr-2" style="cursor: pointer;" onclick="loadData('.$next.')">Next</span>';
        }
     ?>

    <!--JAVASCRIPT START-->
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/style.js"></script>
    <!--JAVASCRIPT END-->
</body>

</html>