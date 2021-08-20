<?php

$opr = $_POST['Choice'];
$err=false;
if($opr == 'A')
{
    $v1 = $_POST['Num11']+0;
    $v2 = $_POST['Num12']+0;
    $do = $_POST['Operation1'];
    $ans=0;
    $sym=';';
    if($do == "ADD")
    {
        $ans = $v1+$v2;
        $sym='+';
    }
    if($do == "SUB")
    {
        $ans = $v1-$v2;
        $sym='-';
    }
    if($do == "DIV")
    {
        if($v2 == 0)
        {
            $err = true;
        }
        else
        {
            $ans = $v1/$v2;
            $sym='-';
        }
    }
    if($do == "MUL")
    {
        $ans = $v1*$v2;
        $sym='x';
    }
    if($do == "MOD")
    {
        if($v2 == 0)
        {
            $err = true;
        }
        else
        {
            $ans = $v1%$v2;
            $sym='%';
        }
    } 
    $eq="";
    if($err)
    {
        $eq = "ERROR";
    }
    else
    {
        $eq = $v1." ".$sym." ".$v2." = ".$ans;
    }

    
}

else if($opr == 'T')
{
    $do = $_POST['Operation2'];
    $degree = $_POST['Num21']+0;
    $angle = deg2rad($degree);
    $ans = 0;
    if($do == "SIN")
    {
        $ans  = sin($angle);
    }
    if($do == "COS")
    {
        $ans  = cos($angle);
    }
    if($do == "TAN")
    {
        $ans  = tan($angle);
    }
    if($do == "ARCSIN")
    {
        $ans  = asin($degree);
        $ans = rad2deg($ans)."<sup>o</sup>";
    }
    if($do == "ARCCOS")
    {
        $ans  = acos($degree);
        $ans = rad2deg($ans)."<sup>o</sup>";
    }
    if($do == "ARCTAN")
    {
        $ans  = atan($degree);
        $ans = rad2deg($ans)."<sup>o</sup>";
    }
    $eq = $do." (".$degree.") = ".$ans;

    
}
else if($opr == 'E')
{
    $v1 = $_POST['Num31']+0;
    $v2 = $_POST['Num32']+0;
    $ans = pow($v1,$v2);
    $eq =$v1."<sup>".$v2."</sup> = ".$ans;
    
}

else if($opr == 'R')
{
    $v1 = $_POST['Num41']+0;
    $v2 = $_POST['Num42']+0;
    $ans=0;
    if($v2 == 0)
    {
        $err = true;
    }
    else
    {
        $ans = pow($v1,1/$v2);
    }

    $eq="";
    if($err)
    {
        $eq = "ERROR";
    }
    else
    {
        $eq =$v1."<sup>1/".$v2."</sup> = ".$ans;
    }

    
}
else if($opr == 'L')
{
    $v1 = $_POST['Num51']+0;
    $v2 = $_POST['Num52']+0;
    $ans=0;
    if($v2 < 0 or $v2 == 1 or $v1 < 0)
    {
        $err = true;
    }
    else
    {
        $ans = log($v1,$v2);
    }

    $eq="";
    if($err)
    {
        $eq = "ERROR";
    }
    else
    {
        $eq = "Log<sub>".$v2."</sub>(".$v1.") = ".$ans;
    }
    
}
else if($opr == 'B')
{
    $v1 = $_POST['Num61']+0;
    $v2 = $_POST['Num62']+0;
    $do = $_POST['Operation3'];
    $ans=0;
    if($do == "AND")
    {
        $ans = $v1 & $v2;
    }
    if($do == "OR")
    {
        $ans = $v1 | $v2;
    }
    if($do == "XOR")
    {
        $ans = $v1 ^ $v2;
    }

    $eq = $v1." ".$do." ".$v2." = ".$ans;

    
}

$eq = rawurlencode($eq);
header("Location: http://localhost:800/Lab4/20bcs102.php?ans=$eq");
exit();

?>
