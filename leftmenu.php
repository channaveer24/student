<?php
include("connect-db-left.php");

date_default_timezone_set('Asia/Kolkata');

$dt = date("Y-m-d");
?>

<style type="text/css">
	@font-face {
		font-family: "Vollkorn-VariableFont_wght";
		src: url("assets/Vollkorn-VariableFont_wght.ttf");
	}

	@font-face {
		font-family: "OldStandardTT-Regular";
		src: url("assets/OldStandardTT-Regular.ttf");
	}


	@font-face {
		font-family: "RobotoSlab-VariableFont_wght";
		src: url("assets/RobotoSlab-VariableFont_wght.ttf");
	}
</style>

<body>
	<div class="scrollbar-sidebar" style="background-color: #343a40;">
		<div class="app-sidebar__inner">
			<ul class="vertical-nav-menu" style="font-family: Vollkorn-VariableFont_wght;">
				<li class="app-sidebar__heading">
				<li class="app-sidebar__heading" style="color: white; font-family: bolder;font-size: 20px;">ADMIN
				</li>

				<li id="mas_exp">
					<a href="#" style="color: white; font-family: bolder;font-size: 20px;">
						MASTER
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul id="vertical-sub2" style="font-family: OldStandardTT-Regular;">

						<li class="active_bus_m">
							<a href="stream_list.php" style="color: white; font-family: bolder;font-size: 18px;">
								<i class="metismenu-icon"></i>
								<span id="bus_m">Stream</span>
							</a>
						</li>

						<li class="approval_m">
							<a href="student_list.php?dt=<?php echo ($dt); ?>"
								style="color: white; font-family: bolder;font-size: 18px;">
								<i class="metismenu-icon"></i>
								<span id="app_m">Student</span>
							</a>
						</li>



						<li class="active_trip">
							<a href="question_bank.php" style="color: white; font-family: bolder;font-size: 18px;">
								<i class="metismenu-icon"></i>
								<span id="bus_m">Question Bank</span>
							</a>
						</li>

						<li class="active_salary">
							<a href="quiz_list.php" style="color: white; font-family: bolder;font-size: 18px;">
								<i class="metismenu-icon"></i>
								<span id="bus_m">Quiz List</span>
							</a>
						</li>

						<li class="active_adv">
							<a href="welcome.php" style="color: white; font-family: bolder;font-size: 18px;">
								<i class="metismenu-icon"></i>
								<span id="bus_m">Quiz</span>
							</a>
						</li>

						<!--<li class="active_party">
							<a href="party_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="party_up">Party</span>
							</a>
						</li>
					
						<li class="active_col">
							<a href="payboy_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="col_up">Collection</span>
							</a>
						</li>

						<li class="active_ajja">
							<a href="ajja_info.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="ajja_id">Ajja</span>
							</a>
						</li>-->

						<!--
						<li class="active_ind_cus">
							<a href="ind_customer.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="ind_cus">Customers</span>
							</a>
						</li>
					-->
					</ul>
				</li>


				<!--<li id="mas_items">
					<a href="#" style="color: white; font-family: bolder;font-size: 20px;">
						Items
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul style="font-family: OldStandardTT-Regular;">	
						<li class="active_st">
							<a href="item_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="stock_lbl">Items List</span>
							</a>
						</li>			
					</ul>
				</li>


				<li id="mas_report">
					<a href="#" style="color: white; font-family: bolder;font-size: 20px;">
						Report
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul style="font-family: OldStandardTT-Regular;">	
						<li class="active_report">
							<a href="daily_report.php?dt=<?php echo ($dt); ?>" style="color: white; font-family: bolder;font-size: 20px;">								
								<span id="dreport_up">Item Report</span>
							</a>
						</li>-->

				<!--<li class="active_customer">
							<a href="daily_customer_report.php?dt=<?php echo ($dt); ?>" style="color: white; font-family: bolder;font-size: 20px;">								
								<span id="customer_up">Customer Report</span>
							</a>
						</li>

						<li class="active_sum_rp">
							<a href="summary_report.php" style="color: white; font-family: bolder;font-size: 20px;">
								<span id="sum_wt">Summary Report</span>
							</a>
						</li>-->

				<!--
						<li id="active_sum">
							<a href="#" style="color: white; font-family: bolder;font-size: 20px;">	
								<span id="sum_up">Summary</span>
							</a>
							<ul>
								<li class="active_sum_rp">
									<a href="summary_report.php" style="color: white; font-family: bolder;font-size: 18px;">
										<span id="sum_wt">Item Report</span>
									</a>
								</li>

								<li class="active_sum_cs">
									<a href="summary_cash.php" style="color: white; font-family: bolder;font-size: 18px;">
										<span id="sum_cs">Cash Report</span>
									</a>
								</li>
							</ul>
						</li>
						
						
						<li class="active_cash">
							<a href="cash_report.php?dt=<?php echo ($dt); ?>" style="color: white; font-family: bolder;font-size: 20px;">								
								<span id="cash_up">Cash Report</span>
							</a>
						</li>


						<li class="active_exp">
							<a href="exp_cash2.php" style="color: white; font-family: bolder;font-size: 20px;">
								<span id="exp_rp">Cash Report</span>
							</a>
						</li>

						<li class="active_dc">
							<a href="daily_cash.php?fr=<?php echo ($dt); ?>" style="color: white; font-family: bolder;font-size: 20px;">
								<span id="exp_dc">Jama Book</span>
							</a>
						</li>
						
							<li class="active_mnt">
								<a href="monthly_rp.php" style="color: white; font-family: bolder;font-size: 20px;">
									<span id="mnt_rp">Monthly Report</span>
								</a>
							</li>
						

										
					</ul>
				</li>-->

				<!--<li id="mas_emp">
					<a href="#" style="color: white; font-family: bolder;font-size: 20px;">
						Employee
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul style="font-family: OldStandardTT-Regular;">	
						<li class="active_emp">
							<a href="advance_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="emp_act">Emp Adv</span>
							</a>
						</li>-->
				<!--
						<li class="active_sal">
							<a href="salary_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="emp_sal">Salary</span>
							</a>
						</li>	

						<li class="active_rnt">
							<a href="rent_list.php" style="color: white; font-family: bolder;font-size: 20px;">
								<i class="metismenu-icon"></i>
								<span id="rnt">Shop Rent</span>
							</a>
						</li>	
						-->
			</ul>
			</li>


			</li>
			</ul>
		</div>
	</div>
	</div>