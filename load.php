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
    <div id="result">
        
    </div>
    <!--JAVASCRIPT START-->
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
    <script>
        $(document).ready(function(){
            loadData(0);
        });
        function loadData(page){
            $.post('index.php?p='+page,function(respos){
                $('#result').html(respos);
            })
        }
    </script>
    <!--JAVASCRIPT END-->
</body>

</html>