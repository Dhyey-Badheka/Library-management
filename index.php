
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhyey</title>
</head>
<style>
.leftside , .rightside{
    width:50%;
}
.row{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-areas: "colo colt";
    grid-template-rows: 1fr;
}
.colo{
    grid-area: colo;
}
.colt{
    grid-area: colt;
}
</style>
<body>
    <h1 style="text-align: center; color: rgb(255, 51, 0);">WELCOME TO BVM</h1>
    <h2 style="text-align: center; color: rgb(243, 97, 0); font: outline; ">LIBRARY MANAGEMENT SYSTEM OF BVM</h2>
        <div class="row" >
        <div class="colo">
        <div class="leftside"></div>
        <fieldset style="height: 1200px; width: 400px;">
         <legend style="font-size: 30px; color: rgb(0, 36, 243); ">Fill up your data</legend>
         <table align="center" style="background-color: royalblue;" border="5px">
        
         <form action="" method="POST">
                <tr>
                    <td>
                        <h4>Choose your profession:</h4>
                    </td>
                    <td>
                        <h4><input type="radio" name="profession" value="Student">Student</input>
                            <br><input type="radio" name="profession" value="Faculty">Faculty</input>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your academic year:</h4>
                    </td>
                    <td>
                        <h4><input type="radio" name="yr" value="1">1</input>
                            <br>    <input type="radio" name="yr" value="2">2</input>
                            <br><input type="radio" name="yr" value="3">3</input>
                            <br><input type="radio" name="yr" value="4">4</input>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your name:</h4>
                    </td>
                    <td>
                        <h4><input type="text" name="name" placeholder="Your name here"></input></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your date of Birth:</h4>
                    </td>
                    <td>
                        <h4><input type="date" name="dob"></input></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your Roll number:</h4>
                    </td>
                    <td>
                        <h4><input type="text" name="rno" placeholder="Your roll number here"></input></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your Enrollment number:</h4>
                    </td>
                    <td>
                        <h4><input type="text" name="eno" placeholder="Your enrollment number here"></input></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your full address:</h4>
                    </td>
                    <td>
                        <h4><textarea rows="4" cols="22" name="add" placeholder="Your full address here"></textarea>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your temporary address:</h4>
                    </td>
                    <td>
                        <h4><textarea rows="4" cols="22" name="tadd"
                                placeholder="Your temporary address here"></textarea> </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Enter your contact number:</h4>
                    </td>
                    <td>
                        <h4><input type="text" name="mno" placeholder="Your mobile number here"></input></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Which subscription for books do you prefer:</h4>
                    </td>
                    <td>
                        <h4><input type="radio" name="subs" value="Weekly">Weekly</input><br>
                            <input type="radio" name="subs" value="Fortnightly">Fortnightly</input>
                            <br><input type="radio" name="subs" value="Monthly">Monthly</input>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Upload your passport size photograph:</h4>
                    </td>
                    <td>
                        <h4><input type="file" name="photo"></input>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td align="right" colspan="2">
                    <input type="submit" name="submit"></input>
                    </td>
                </tr>
            </form>
    </fieldset>
    </table>
    </div>
    <br>
    <br>
    <br>

    <br>

    <?php
    if(isset($_POST['submit']))
    {
    ini_set("display_errors",0);
    $a=$_POST['name'];
    $img2=$_POST['photo'];
    $b=$_POST['dob'];
    $c=$_POST['yr'];
    $d=4-$c;
    $e=$_POST['mno'];
    $f=$_POST['rno'];
    $g=$_POST['add'];
    $h=$_POST['tadd'];
    $i=$_POST['subs'];
    $j=$_POST['eno'];
    $k=$_POST['profession'];
    $l="faculty.jpg";
    $m="student.jpg";
    $img3="d_sign_1.jpg";
    

function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$a=test_input($a);
$e=test_input($e);
$f=test_input($f);
$g=test_input($g);
$h=test_input($h);
$j=test_input($j);

$t=preg_match("/[0-9]/", $e);
$r=preg_match("/[0-9]/", $j);
if($a=="" || $a==NULL)
{
echo "<script>
alert('Please enter name');
</script>";
}
else
{
    if(!preg_match('/[a-zA-Z]/',$a))
    {
        echo "<script>
            alert('Name must not contain any special characters or numbers');
        </script>";
    }
    else
    { 
    if($b=="" || $b==NULL)
        {
        echo "<script>
            alert('Please enter your date of birth');
            </script>";
        }
        else
        {
            if(!$t || strlen($e)!=10)
            {
                echo "<script>
                alert('Please enter your valid mobile number');
                </script>";
            }
            else
            {
                if($f=="" || $f==NULL)
                {
                echo "<script>
                alert('Please enter your roll number');
                </script>";
                }
                else
                {       if($g=="" || $g==NULL)
                        {
                        echo "<script>
                        alert('Please enter your permanent address');
                        </script>";
                        }
                    else    
                    {
                            if($h=="" || $h==NULL)
                            {
                            echo "<script>
                            alert('Please enter your temporary address');
                            </script>";
                            }
                            else
                            {
                                if($i=="" || $i==NULL)
                                {
                                echo "<script>
                                alert('Please select your subscription duration');
                                </script>";
                                }
                                else
                                {
                                    if(!$r || strlen($j)!=8)
                                    {
                                    echo "<script>
                                    alert('Please enter your enrollmnt number of 8 digits');
                                    </script>";
                                    }
                                    else
                                    {
                                    if($k=="" || $k==NULL)
                                    {
                                    echo "<script>
                                    alert('Please select your profession');
                                    </script>";
                                    }
                                    else
                                    {
                                    echo "<script>
                                    alert('Congratulations!You have successfully registered for Library.Your E-Card is here!!!!');
                                    </script>";
                                    }
                                    }
                                }
                            }
                        }
                    }
                }
                }
           }
        }
    }
?>

<div class="colt">
        <div class="rightside"></div>
    <fieldset style="height: 450px; width: 450px;">
        <legend style="font-size: 30px; color: rgb(0, 36, 243); ">Your Virtual ID card:</legend>
        <?php 
        ini_set("display_errors",0);
        if($k=="Faculty") 
        {
            echo '<table width="100%"  cellspacing="2px" style="background-image:url(faculty.jpg); width:100% ; height:100% ; width:100% ; background-size:cover;">';
        }   
        else
        {
            echo '<table width="100%"  cellspacing="2px" style="background-image:url(student.jpg); width:100% ; height:100% ;  width:100% ; background-size:cover;">';
        }
        ?><tr>
                <td><?php
                $img1="bvmlogo.png";
                ?><img src=<?php echo $img1; ?> height="70px" width="70px">
                </td>
                <td colspan="2">
                <h1 style="font-size:300%; color:#FFFF00;">&nbsp;&nbsp; BVM &nbsp;</h1>
                </td>
                <td colspan="2">&nbsp;&nbsp;&nbsp;
                <img src=<?php echo $img2; ?> height="100px" width="100px">
                </td>
            </tr>
            <tr>
            <td style="color:#FFFF00;"><b>Name:</td>
            <td style="color:#FFFF00;"><b><?php echo $a; ?></td>
            <td style="color:#FFFF00;"><b>Your permanent address:</td>
            <td style="color:#FFFF00;"><b><?php echo $g; ?></td>
            </tr>
            <td style="color:#FFFF00;"><b>DOB:</td>
            <td style="color:#FFFF00;"><b><?php echo $b; ?></td>
            <td style="color:#FFFF00;"><b>Your temorary address:</td>
            <td style="color:#FFFF00;"><b><?php echo $h; ?></td>
            </tr>
            <td style="color:#FFFF00;"><b>Validity:</td>
            <td style="color:#FFFF00;"><b><?php echo $d . " years"; ?></td>
            <td style="color:#FFFF00;"><b>Subscription period:</td>
            <td style="color:#FFFF00;"><b><?php echo $i; ?></td>
            </tr>
            <td style="color:#FFFF00;"><b>Mobile no:</td>
            <td style="color:#FFFF00;"><b><?php echo $e; ?></td>
            <td style="color:#FFFF00;"><b>Enrollment ID:</td>
            <td style="color:#FFFF00;"><b><?php echo $j; ?></td>
            </tr>
            <td style="color:#FFFF00;"><b>Roll no:</td>
            <td style="color:#FFFF00;"><b><?php echo $f; ?></td>
            <td style="color:#FFFF00;"><b>Official Sign:</td>
            <td style="color:#FFFF00;"><b>&nbsp;&nbsp;&nbsp;&nbsp; <img src=<?php echo $img3; ?> height="30px" width="100px"></td>
            </tr>
        </table>
    </fieldset>

    </div>
    </div>
</body>

</html>