<?php
include("connect-db.php");
session_start();

?>

<style type="text/css">
    
table {
  font-size: 15px;
}

</style>


<?php

    $teacher_info = GetAllA("Select name,id from teacher_login",$con);
    $fee_info=GetCol("Select distinct(acadamic_year) from home_work",$con);

?>


<?php include("header.php"); ?>
<body>
<title>HomeWork Report</title>
<?php include("top.php"); ?> 
<?php include("leftmenu.php"); ?>

                    <div class="app-main__outer">
                    <div class="app-main__inner">
                      
                        <form action="homewrk_rp.php" method="post" enctype="multipart/form-data">
  <h5 class="card-title">Home-Work Details:</h5>                                                       
<fieldset>
    <legend>Search:</legend>
        <table>
              <tr>
                <td>Acadamic Year</td>
                <td>
                    <select name="acadamic_year"  value="" class="form-control" required="" oninvalid="this.setCustomValidity('Please Select Gender')" oninput="this.setCustomValidity('')" >
                    <option value="">Select</option>
                        <?php for($k=0;$k<count($fee_info);$k++) { ?>
                          <option value="<?php echo($fee_info[$k]); ?>"<?=$_POST['acadamic_year'] == $fee_info[$k] ? ' selected="selected"' : '';?>><?php echo($fee_info[$k]); ?></option>
                        <?php } ?>                    
                    </select>
                </td>
           
                <td style="padding-left: 80px;">Class</td>
                <td>
                    <select name="class_name" class="form-control" required="" oninvalid="this.setCustomValidity('Please Select Gender')" oninput="this.setCustomValidity('')" >
                    <option value="All">All</option>
                    <?php for($k=1;$k<=10;$k++) { ?>

                        <option value="<?php echo($k); ?>"><?php echo($k); ?></option>

                    <?php } ?>
                    </select>
                </td>
            
                <td style="padding-left: 80px;">Teacher</td>
                <td>
                    <select name="teacher_id" class="form-control" required="" oninvalid="this.setCustomValidity('Please Select Gender')" oninput="this.setCustomValidity('')" >
                    <option value="All">All</option>

                    <?php for ($i=0;$i<count($teacher_info);$i++) { ?>

                        <option value="<?php echo($teacher_info[$i]['id']); ?>"><?php echo($teacher_info[$i]['name']); ?></option>
                       
                    <?php } ?>

                    
                    </select>
                </td>
            </tr>
        </table>

</fieldset>
    

<input class="mt-1 btn btn-primary" name="submit" type="submit" value="Submit">



<?php

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL

    $data=array();

    $data=$_POST;

    $data['homewrk_rp.php']='';
  
    }
    ?>


    </div>
     </div></div>
<?php include("footer.php"); ?>

<script type="text/javascript">

$(document).ready(function() 
{
    
    $(".vertical-sub11").slideUp().slideDown('fast');
    
});

</script> 
