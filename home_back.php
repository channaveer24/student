<?php include("connect-db.php"); ?>

<?php 

$dt=date("Y-m-d");



$ab_info= GetAllA("Select * from absentees where id!=0 and a_date = '".$dt."' order by std Asc",$con);
$all_cnt=count($ab_info);
for($k=0;$k<$all_cnt;$k++)
{
    $ab_info[$k]['girls']=GetOne("Select count(id) as cnt from students where std=".$ab_info[$k]['std']." and acadamic_year='".$ab_info[$k]['acadamic_year']."' and gender='Female' ",$con);
    $ab_info[$k]['boys']=GetOne("Select count(id) as cnt from students where std=".$ab_info[$k]['std']." and acadamic_year='".$ab_info[$k]['acadamic_year']."' and gender='Male' ",$con);
}

?>


<?php
session_start();

if(!$_SESSION["username"])
{
	header("location: index.php");
}

include("header.php"); ?>


<body>
    
<?php include("top.php"); ?> 
<?php include("leftmenu.php"); ?>


<?php 

$students_info = GetAllA("Select count(reg_no) as cnt,gender,std from students where std=8 group by gender,std order by gender",$con);

$students_9 = GetAllA("Select count(reg_no) as cnt,gender,std from students where std=9 group by gender,std order by gender",$con);

$students_10 = GetAllA("Select count(reg_no) as cnt,gender,std from students where std=10 group by gender,std order by gender",$con);

?>

                    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    
                                    <div> Dashboard
                                        
                                    </div>
                                </div>
                                    </div>
                        </div>            
						
						<div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">8th std Students</div>
                                            <div class="widget-subheading">Total Student  </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo($students_info[0]['cnt']+$students_info[1]['cnt']); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">9th std Students</div>
                                            <div class="widget-subheading">Total Student  </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo($students_9[0]['cnt']+$students_9[1]['cnt']); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">10th std Students</div>
                                            <div class="widget-subheading">Total Student  </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo($students_10[0]['cnt']+$students_10[1]['cnt']); ?></span></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                       <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 ">
                                    <div class="card-body">
                                               <h5 class="card-title">8th std students</h5> 
                                                <table class="mb-0 table table-dark">
                                            <thead>
                                            <tr>
                                                <th>No of Girls</th>
												<td><?php echo($students_info[0]['cnt']); ?></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                
                                                <th>No of Boys</th>
                                                <td><?php echo($students_info[1]['cnt']); ?></td>
                                                
                                            </tr>
                                            <tr>
												
												<th>Total Sudent</th>
												<td><?php echo($students_info[0]['cnt']+$students_info[1]['cnt']); ?></td>
											</tr>
                                            </tbody>
                                        </table>
                                            
                                           </div> 
                                       
                                </div>
                            </div>
							 <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 ">
                                    <div class="card-body">
                                               <h5 class="card-title">9th std students</h5> 
                                                <table class="mb-0 table table-dark">
                                            <thead>
                                            <tr>
                                                <th>No of Girls</th>
												<td><?php echo($students_9[0]['cnt']); ?></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                
                                                <th>No of Boys</th>
                                                <td><?php echo($students_9[1]['cnt']); ?></td>
                                                
                                            </tr>
                                            <tr>
												
												<th>Total Sudent</th>
												<td><?php echo($students_9[0]['cnt']+$students_9[1]['cnt']); ?></td>
											</tr>
                                            </tbody>
                                        </table>
                                            
                                           </div> 
                                       
                                </div>
                            </div>
							 <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 ">
                                    <div class="card-body">
                                               <h5 class="card-title">10h std students</h5> 
                                                <table class="mb-0 table table-dark">
                                            <thead>
                                            <tr>
                                                <th>No of Girls</th>
												<td><?php echo($students_10[0]['cnt']); ?></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                
                                                <th>No of Boys</th>
                                                <td><?php echo($students_10[1]['cnt']); ?></td>
                                                
                                            </tr>
                                            <tr>
												
												<th>Total Sudent</th>
												<td><?php echo($students_10[0]['cnt']+$students_10[1]['cnt']); ?></td>
											</tr>
                                            </tbody>
                                        </table>
                                            
                                           </div> 
                                       
                                </div>
                            </div>
							
							
							
                            
                        </div>
                        
                    </div>
            
<?php include("footer.php"); ?>