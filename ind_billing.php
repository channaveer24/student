<?php
	include("connect-db.php");
	session_start();
?>

<style type="text/css">

   .active_ind_cus {
  background-color: #005086;
}

    #ind_cus {
    color: white;
}

</style>

<style type="text/css">
	<?php 

	$cnt_routes=count($buy_info);

	if($cnt_routes!='')
	{
		$cnt_routes++;
	}
	else
	{
		$cnt_routes=2;
	}

	for($i=$cnt_routes;$i<11;$i++) { ?>

					#bus<?php echo($i); ?>{
			    display: none;
			}

	<?php } ?>

</style>

<style type="text/css">
	<?php 

	$cnt_routes=count($buy_info);

	if($cnt_routes!='')
	{
		$cnt_routes;
	}
	else
	{
		$cnt_routes=1;
	}

	for($i=1;$i<$cnt_routes;$i++) { ?>

					#add_row<?php echo($i); ?>{
			    display: none;
			}

	<?php } ?>

</style>

<script type="text/javascript">
	
function add_bus(m)
{
	$( "#add_row"+m ).hide();
	m=m+1;
	$( "#bus"+m ).show();
	$( "#add_row"+m ).show();
}

</script>

<script type="text/javascript">
	
	function cal_fine(m)
	{
		var wei=document.getElementById('quantity'+m).value;
		var perc=document.getElementById('percent'+m).value;

		var fine_val=0;

		if(!isNaN(wei) && !isNaN(perc))
		{
			fineval=(parseFloat(wei)*parseFloat(perc))/100;

			//fineval=Math.round(fineval,3);
			fineval=fineval.toFixed(3);

			if(!isNaN(fineval))
			{
				document.getElementById('fine'+m).value=fineval;
			}			
		}

		var sum=0;
		for(j=1;j<11;j++)
		{
			if(!isNaN(document.getElementById('fine'+j).value) && document.getElementById('fine'+j).value!='')
			{
				sum=parseFloat(sum)+parseFloat(document.getElementById('fine'+j).value);
			}
		}

		if(sum>0)
		{
			sum=sum.toFixed(3);
			document.getElementById('total_w').value=sum;
			cal_cash();
		}

	}


	function cal_refine()
	{
		var wei=document.getElementById('ret_quantity').value;
		var perc=document.getElementById('ret_percent').value;

		var fine_val=0;

		if(!isNaN(wei) && !isNaN(perc))
		{
			fineval=(parseFloat(wei)*parseFloat(perc))/100;

			//fineval=Math.round(fineval,3);
			fineval=fineval.toFixed(3);

			if(!isNaN(fineval))
			{
				document.getElementById('ret_fine').value=fineval;
			}
		}
	}

	function cal_cash()
	{
		var ttl_amount=document.getElementById('ttl_amt').value;

		var ob=document.getElementById('old_bal').value;

		var pg=document.getElementById('paid_cash').value;


		var fin_ttl=parseFloat(0);
		
		if(!isNaN(document.getElementById('ttl_amt').value) && document.getElementById('ttl_amt').value!='')
		{
			ttl_amount=document.getElementById('ttl_amt').value;
			fin_ttl=parseFloat(fin_ttl)+parseFloat(ttl_amount);
		}

		if(!isNaN(document.getElementById('old_bal').value) && document.getElementById('old_bal').value!='')
		{
			ob=document.getElementById('old_bal').value;
			fin_ttl=parseFloat(fin_ttl)+parseFloat(ob);
		}

		if(!isNaN(document.getElementById('paid_cash').value) && document.getElementById('paid_cash').value!='')
		{
			pg=document.getElementById('paid_cash').value;
			fin_ttl=parseFloat(fin_ttl)-parseFloat(pg);
		}

		if(!isNaN(fin_ttl))
		{
			document.getElementById('final_bal').value=fin_ttl;
		}
	}

</script>

<script type="text/javascript">

	function check_dt_val(m)
	{
		if(document.getElementById('date').value=='')
		{
			document.getElementById('item_id'+m).value='';
			alert('Select Date');
			document.getElementById('date').focus();
		}
	}

	function check_valid()
	{
		for(i=1;i<=10;i++)
		{
			if(document.getElementById('item_id'+i).value!='' && document.getElementById('quantity'+i).value=='')
			{
				alert('Please Enter Weight');
				document.getElementById('quantity'+i).focus();
				return false;
			}

			if((document.getElementById('item_id'+i).value!='' && document.getElementById('quantity'+i).value!='') && document.getElementById('percent'+i).value=='')
			{
				alert('Please Enter %');
				document.getElementById('percent'+i).focus();
				return false;
			}
		}

		if(document.getElementById('total_w').value!='' && document.getElementById('ttl_amt').value=='')
		{
			alert('Please Enter Total Amount');
			document.getElementById('ttl_amt').focus();
			return false;
		}


	}
</script>

<?php include("header.php"); ?>
<body>
<title>Billing</title>
<?php include("top.php"); ?> 
<?php include("leftmenu.php"); ?>

<style type="text/css">
	.form-control {
		height: 35px;
	}
</style>


<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                        
<form action="ind_billing.php" method="post" enctype="multipart/form-data">
<!-- Method can be set as POST for hiding values in URL-->

<?php

$customer_details=GetRow("Select * from kj_customer where id=".$_GET['id']." ",$con);

$items_details=GetAllA("Select * from kj_item_list where del=0 order by item_num",$con);

?>

<fieldset style="margin-top: -5px;">
	
	<legend>Billing</legend>

	<table class="mb-0 table" style="width: 30%;line-height: 0.8;float: left;">
		<tr>
			<th style="border-top-style: none;">Date</th>
			<td style="border-top-style: none;"><input  name="date" id="date" type="date" class="form-control"  required></td>
		</tr>		
		<tr>
			<th>Name</th>
			<td><?php echo($customer_details['customer_name']); ?></td>
		</tr>
		<tr>
			<th>Mobile</th>
			<td><?php echo($customer_details['mobile_no']); ?></td>
		</tr>
	</table>


	<table class="mb-0 table table-bordered" style="width: 70%;float: left;" align="center">

		<tr style="text-align: center;line-height: 1.0;">
			<th style="width: 250px;">Item Name</th>
			<th>Desc</th>
			<th>Weight</th>
			<th>%</th>
			<th>Fine</th>
		</tr>

	<?php for($i=1;$i<=10;$i++) { $j=$i-1; ?>

		<tr id="bus<?php echo($i); ?>" style="line-height: 1.0;">			
			<td>
				<select name="item_id<?php echo($i); ?>" id="item_id<?php echo($i); ?>" class="form-control" onchange="check_dt_val('<?php echo($i); ?>')">
					<option value="">Select</option>
					<?php for($k=0;$k<count($items_details);$k++) { ?>

						<option value="<?php echo($items_details[$k]['id']); ?>"<?=$buy_info[$j]['item_id'] == $items_details[$k]['id'] ? ' selected="selected"' : '';?>><?php echo($items_details[$k]['item_name']); ?></option>

					<?php } ?>
				</select>
			</td>

			<td> 
				<input  name="item_desc<?php echo($i); ?>" id="item_desc<?php echo($i); ?>" type="text" value="<?php echo($buy_info[$j]['item_desc']); ?>" class="form-control">
			</td>

			<td> 
				<input  name="quantity<?php echo($i); ?>" id="quantity<?php echo($i); ?>" type="text" value="<?php echo($buy_info[$j]['sale']); ?>" class="form-control">
			</td>

			<td> 
				<input  name="percent<?php echo($i); ?>" id="percent<?php echo($i); ?>" type="text" class="form-control" onkeyup="cal_fine('<?php echo($i); ?>')">
			</td>

			<td> 
				<input  name="fine<?php echo($i); ?>" id="fine<?php echo($i); ?>" type="text" class="form-control" readonly>
			</td>
			
			<td id="add_row<?php echo($i); ?>">
				<a onclick="add_bus(<?php echo($i); ?>);" class="btn btn-focus" style="color: white;" >+</a>
			</td>
		</tr>
	<?php } ?>

		<tr>
			<th style="text-align: right;">Total</th>
			<th></th>
			<th></th>
			<th></th>
			<th><input type="text" name="total_w" id="total_w" class="form-control" readonly=""></th>
		</tr>	

		<tr>
			<th style="text-align: right;">Total Amt</th>
			<th><!--<input  name="cash_paid" id="cash_paid" type="text" value=""  class="form-control" onkeyup="cal_cash()">--></th>

			<th><!--<input  name="per_gm" id="per_gm" type="text" value=""  class="form-control" onkeyup="cal_cash()">--></th>

			<th></th>

			<th><input type="text" name="ttl_amt" id="ttl_amt" class="form-control" onkeyup="cal_cash()"></th>
		</tr>

		<tr>
			<th style="text-align: right;">Cash OB</th>
			<th></th>
			<th></th>
			<th></th>
			<th><input type="text" name="old_bal" id="old_bal" class="form-control" value="<?php echo($customer_details['balance']); ?>" readonly></th>
		</tr>

		<tr>
			<th style="text-align: right;">Paid</th>
			<th></th>
			<th></th>
			<th></th>
			<th><input type="text" name="paid_cash" id="paid_cash" class="form-control" onkeyup="cal_cash()"></th>
		</tr>	

		<tr>
			<th></th>

			<th></th>
			<th></th>

			<th style="text-align: right;">Final Balance</th>

			<th><input type="text" name="final_bal" id="final_bal" class="form-control" readonly=""></th>
		</tr>

		
	</table>

</fieldset></br>

<div style="text-align: center;">
<input type="submit" name="submit" class="mt-1 btn btn-success" value="Submit" onclick="return check_valid()"/>
<input type="hidden" name="customer_name" value="<?php echo($customer_details['customer_name']); ?>">
<input type="hidden" name="customer_id" value="<?php echo($customer_details['id']); ?>">
<a class="mt-1 btn btn-warning" href="ind_customer.php">Back</a>
</div>


</form>
</div>

</div></div>
</div>
</div><?php include("footer.php"); ?>
</div>
</body>

<?php

if(isset($_POST['submit']))
{ 
	$data=array();

	$data=$_POST;

	unset($data['submit']);

	$billing_data=array();

	$inv_no=GetOne("Select invoice_no from kj_billing_table order by invoice_no desc",$con);

	if($inv_no=='')
	{
		$inv_no=10001;
	}
	else
	{
		$inv_no++;
	}

	$billing_data['invoice_no']=$inv_no;
	$billing_data['date']=$data['date'];
	$billing_data['sec_date']=$data['sec_date'];

	$billing_data['customer_name']=$data['customer_name'];
	$billing_data['customer_id']=$data['customer_id'];

	$billing_data['total_w']=$data['total_w'];
	$billing_data['old_bal']=$data['old_bal'];
	
	//$billing_data['f_minus']=$data['f_minus'];
	$billing_data['final_bal']=$data['final_bal'];

	$billing_data['paid_cash']=$data['paid_cash'];
	$billing_data['ttl_amt']=$data['ttl_amt'];

	$table_name1='kj_billing_table';

	$result=insert_data_id($billing_data,$table_name1,$con);

	$update_cust=Execute("Update kj_customer set balance=".$billing_data['final_bal']." where id=".$billing_data['customer_id']." ",$con);

	for($i=1;$i<=10;$i++) 
	{
		$bill_items=array();
		if($data['item_id'.$i]!='')
		{
			$bill_items['date']=$data['date'];
			$bill_items['bill_id']=$result;
			$bill_items['customer_name']=$data['customer_name'];
			$bill_items['customer_id']=$data['customer_id'];

			$item_info=GetRow("Select * from kj_item_list where id=".$data['item_id'.$i]." ",$con);
			$bill_items['item_id']=$data['item_id'.$i];
			$bill_items['item_name']=$item_info['item_name'];
			$bill_items['quantity']=$data['quantity'.$i];
			$bill_items['percent']=$data['percent'.$i];
			$bill_items['fine']=$data['fine'.$i];

			$bill_items['item_desc']=$data['item_desc'.$i];

			$table_name2='kj_billing_item';

			$result2=insert_data($bill_items,$table_name2,$con);

			/*$bal_quantity=$item_info['quantity']-$bill_items['quantity'];

			$update_item=Execute("Update kj_item_list set quantity=".$bal_quantity." where id=".$data['item_id'.$i]." ",$con);

			$update_daily=Execute("Update kj_daily_update set billed=1 where date='".$bill_items['date']."' and customer_id=".$bill_items['customer_id']." and item_id=".$bill_items['item_id']." ",$con);*/

		}
	} 

	if($data['returned_item']!='')
	{
		$returned_data=array();

		$returned_data['date']=$data['date'];
		$returned_data['bill_id']=$result;
		$returned_data['customer_name']=$data['customer_name'];
		$returned_data['customer_id']=$data['customer_id'];

		$item_info=GetRow("Select * from kj_item_list where id=".$data['returned_item']." ",$con);
		$returned_data['item_id']=$data['returned_item'];
		$returned_data['item_name']=$item_info['item_name'];
		$returned_data['quantity']=$data['ret_quantity'];
		$returned_data['percent']=$data['ret_percent'];
		$returned_data['fine']=$data['ret_fine'];
		$returned_data['returned ']=1;

		$table_name3='kj_billing_item';

		$result2=insert_data($returned_data,$table_name3,$con);

		/*$bal_af_return=$item_info['quantity']+$returned_data['quantity'];

		$update_item=Execute("Update kj_item_list set quantity=".$bal_af_return." where id=".$returned_data['item_id']." ",$con);*/
	}
	

	echo "<script>window.location.href='customer_bill_print.php?id=".$result."';</script>";
}

?>

<script type="text/javascript">

$(document).ready(function() 
{
    
    $('#vertical-sub2').addClass('mm-collapse');
    $('#vertical-sub2').addClass('mm-show');
    $('#mas_exp').addClass('mm-active');
    $('#mas_exp1').addClass('mm-active');
    
});

</script>
