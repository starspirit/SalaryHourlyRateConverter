<?php
                   
if ( isset($_POST[salary]) )  
{
    $ssalary = htmlspecialchars($_POST[salary]);

    $smonthly = $ssalary / 12;
    $sweekly = $ssalary / 52;
    $sdaily = $sweekly / 5;
    $shourly = $sweekly / 40; 
}                           

if ( isset($_POST[hourly]) )
{                
    $hhourly = htmlspecialchars($_POST[hourly]);
    
    $hdaily = $hhourly * 8;
    $hweekly = $hhourly * 40;
    $hsalary = $hweekly * 52;  
    $hmonthly = $hsalary /12;
}


?>           

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Converting Results</title>  
    <link rel="stylesheet" href="../lib/jquery.mobile.css" />
    <script src="../lib/jquery.js"></script>
    <script src="../lib/jquery.mobile.js"></script>
</head>
<body>
    <div data-role="page">
        <header data-role="header">
            <h1>Salary Converter</h1>
        </header>
        <div data-role="content" data-theme="b"> 
            <?php   
                
                if ( !empty($ssalary) )
                {               
                    echo "If your salary is:  " . $ssalary . ", then: <br>";
                    echo "Monthly pay is:  " . floor($smonthly) . "<br>";
                    echo "Weekly pay is:  " . floor($sweekly) . "<br>";
                    echo "Daily pay is:  " . floor($sdaily) . "<br>";
                    echo "Hourly pay is:  " . floor($shourly) . "<br>";
                }    
                if ( !empty($hhourly) )
                {      
                    echo "If your hourly rate is:  " . $hhourly . ", then: <br>";
                    echo "Daily pay is:  " . floor($hdaily) . "<br>";
                    echo "Weekly pay is:  " . floor($hweekly) . "<br>";
                    echo "Monthly pay is:  " . floor($hmonthly) . "<br>";
                    echo "Salary is:  " . floor($hsalary) . "<br>";
                }
            
            ?>  
            <a href="#" data-role="button" data-rel="back" data-inline="true">Go Back!</a>  
            <a href="index.html" data-role="button" data-inline="true">Main Menu</a>
        </div>
        <footer data-role="footer">
            <h4>2012</h4>
        </footer>
    </div>
</body>
</html>