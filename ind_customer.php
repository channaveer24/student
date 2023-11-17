<?php include("header.php"); session_start(); ?>
<style>
.table th, .table td{padding:5px 10px}
</style>
<body>
<title>Customers List</title>
<?php include("connect-db.php"); ?>

<?php 

$members_info = GetAllA("Select * from kj_customer where del=0 and ind_cus=1 order by customer_name ",$con);

?>

<style type="text/css">
    @font-face {
font-family: "PlayfairDisplayItalic";
src: url("assets/PlayfairDisplayItalic.ttf");
}
</style>


<style type="text/css">

    .active_ind_cus {
  background-color: #005086;
}

    #ind_cus {
    color: white;
}

</style>

<?php include("top.php"); ?> 
<?php include("leftmenu.php"); ?>



 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                      
                                         <h5 style="font-size: 30px;font-family: PlayfairDisplayItalic;"><img src="assets/images/customer.png" style="height: 50px;">Customers List</h5>

                                         <a href="add_ind_customer.php" title="List" class="mb-2 mr-2 btn btn-focus">Add New Customer</a>
                      
                                        <table class="mb-0 table table-bordered example" data-page-length='100'>
                                            <thead>
                                            <tr style="text-align: center;">                                           
                                                <th>Customer Name</th>
                                                <th>Mobile No</th>
                                                <th>Balance</th>
                                                <th>Shop</th>                                                
                                                <th>Edit</th>
                                            
                                                <th>View</th>
                                            
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            <?php for($i=0;$i<count($members_info);$i++) { ?>
                                            
                                            <tr style="text-align: center;">
                                                <td><?php echo($members_info[$i]['customer_name']); ?></td>
                                                <td><?php echo($members_info[$i]['mobile_no']); ?></td>
                                                <?php if($members_info[$i]['balance']>0) { ?>

                                                    <th style="color: red;"><?php echo($members_info[$i]['balance']); ?></th> 

                                                <?php } else { ?>

                                                    <th><?php echo($members_info[$i]['balance']); ?></th> 

                                                <?php } ?> 
                                                
                                                <td><a href="ind_billing.php?id=<?php echo($members_info[$i]['id']); ?>" style="color: #495057;"><i class="fas fa-shopping-cart"></i></a></td>
                                                <td><a href="add_ind_customer.php?action=edit&id=<?php echo($members_info[$i]['id']); ?>" style="color: #495057;"><i class="fas fa-edit"></i></a></td>
                                                
                                                <td><a href="customer_billing_list.php?id=<?php echo($members_info[$i]['id']); ?>" style="color: #495057;"><i class="fas fa-binoculars"></i></a></td>
                                                
                                            </tr>

                                            <?php } ?> 

                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
          
<?php include("footer.php"); ?>

<script type="text/javascript">

$(document).ready(function() 
{
    $('#vertical-sub2').addClass('mm-collapse');
    $('#vertical-sub2').addClass('mm-show');
    $('#mas_exp').addClass('mm-active');
    $('#mas_exp1').addClass('mm-active');
    
});

</script>
