
<?php 
if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin')
{
	$all_std=array(1,2,3,4,5,6,7,8,9,10);
}
else
{
	$all_std=explode(",",$_SESSION['std_all']);
}



$sub_std=array(1=>'st',2=>'nd',3=>'rd',4=>'th',5=>'th',6=>'th',7=>'th',8=>'th',9=>'th',10=>'th');

$dt=date("Y-m-d");

?>
<body>
    

<div class="scrollbar-sidebar" style="overflow: auto; margin-top: 5px;">
    <div class="app-sidebar__inner">
		<ul class="vertical-nav-menu" >
			<li class="app-sidebar__heading">
			<li class="app-sidebar__heading">Dashboard</li>
				<ul>
					<li>
						<a href="home.php">
							<i class="metismenu-icon pe-7s-diamond"></i> Dashboard 					
						</a>
					</li>
				</ul>
				
			<li class="app-sidebar__heading">Management</li>	

				<li>
					<a href="#">
						<i class="pe-7s-add-user"> </i>
						User Management
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub2">					
						<li>
							<a href="teachers_list.php?teach=1">
								<i class="metismenu-icon"></i>
								Teaching
							</a>
						</li>	
						</ul>
					<ul class="vertical-sub2">					
						<li>
							<a href="teachers_list.php?teach=0">
								<i class="metismenu-icon"></i>
								Non Teaching
							</a>
						</li>	
						</ul>
					</li>


			<li>
				<a href="#">
					<i class="pe-7s-study"> </i>
					Students Info
					<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
				</a>
				<ul class="vertical-sub3">	
				<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>				
					<li>
						<a href="students_list.php">
							<i class="metismenu-icon"></i>
							All Students
						</a>
					</li>

				<?php } ?>


					<?php for($i=0;$i<count($all_std);$i++) { ?>

							<li>
								<a href="students_list.php?std=<?php echo($all_std[$i]); ?>">
									<i class="metismenu-icon"></i>
									<?php echo($all_std[$i]); echo($sub_std[$all_std[$i]]); ?>  Std
								</a>
							</li>


					<?php } ?>
							   
				</ul>
			</li>


			<li>
					<a href="#">
						<i class="pe-7s-science"> </i>
						Subject
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub20">					
						<li>
							<a href="sub_list.php?teach=1">
								<i class="metismenu-icon"></i>
								Add Subject
							</a>
						</li>	
						</ul>

			<li>
					<a href="#">
						<i class="pe-7s-speaker"> </i>
						Calander and Events
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub16">					
						<li>
							<a href="holidays_list.php">
								<i class="metismenu-icon"></i>
								Event List 
							</a>
						</li>	
						</ul>
			</li>
			
			
		     <?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>
					<li>
						<a href="#">
							<i class="pe-7s-cash"> </i>
							Fees Management
							<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
						</a>
						<ul  class="vertical-sub5">
							<li>
								<a href="fee_8th.php">
									<i class="metismenu-icon"></i>
									All
								</a>
							</li>
							<?php for($i=0;$i<count($all_std);$i++) { ?>

							<li>
								<a href="fee_8th.php?std=<?php echo($all_std[$i]); ?>">
									<i class="metismenu-icon"></i>
									<?php echo($all_std[$i]); echo($sub_std[$all_std[$i]]); ?>  Std
								</a>
							</li>

						<?php } ?>			   
						</ul>
					</li>
			<?php } ?>

			
			<?php if($_SESSION['desg']=='Teacher' || $_SESSION['desg']=='Super Admin') { ?>

				<li>
					<a href="#">
						<i class="pe-7s-id"> </i>
						Attendence Management
	                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
	                 </a>
				   <ul class="vertical-sub13">
				   		<li>
				   			<a href="view_attadance.php?ash=<?php echo($dt); ?>">
									<i class="metismenu-icon"></i>View Attendance
							</a>
				   		</li>
			   			<?php for($i=0;$i<count($all_std);$i++) { ?>

							<li>
								<a href="attandance_list.php?std=<?php echo($all_std[$i]); ?>">
									<i class="metismenu-icon"></i>
									<?php echo($all_std[$i]); echo($sub_std[$all_std[$i]]); ?>  Std
								</a>
							</li>

						<?php } ?>
						
					</ul>
				</li>

			<?php } ?>

			<?php if($_SESSION['desg']=='Teacher') { ?>

				<li>
					<a href="#">
						<i class="pe-7s-bookmarks"> </i>
						Homework Management
	                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
	                 </a>
				   <ul class="vertical-sub14">
						<li>
							<a href="homework_list.php">
								<i class="metismenu-icon"></i>
								Update Homework
							</a>
						</li>
					</ul>
				</li>

			<?php } ?>

			<?php if($_SESSION['desg']=='Teacher' || $_SESSION['desg']=='Super Admin') { ?>

				<li>
		            <a href="#">
		                <i class="pe-7s-photo-gallery"> </i>
		                    Progress Report
		                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
		            </a>
		               <ul  class="vertical-sub12">

		               	<?php for($i=0;$i<count($all_std);$i++) { ?>

							<li>
								<a href="progress_list.php?std=<?php echo($all_std[$i]); ?>">
									<i class="metismenu-icon"></i>
									<?php echo($all_std[$i]); echo($sub_std[$all_std[$i]]); ?>  Std
								</a>
							</li>

						<?php } ?>

		            </ul>
		        </li>

		     <?php } ?>

			

			
					<li>
					<a href="#">
						<i class="pe-7s-clock"> </i>
						Staff Attendence Management
	                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
	                 </a>
				   <ul class="vertical-sub15">
				   	<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>
						<li>
								<a href="teacher_attendence.php">
									<i class="metismenu-icon"></i>
									Import Attandance Data
								</a>
							</li>
							<li>
								<a href="attnd_staff.php">
									<i class="metismenu-icon"></i>
									Generate Attandance
								</a>
							</li>
							<?php } ?>
							<li>
								<a href="employee_attrp.php">
									<i class="metismenu-icon"></i>
									View Attandance
								</a>
							</li>

					</ul>
				</li>
			
			<li>
				<a href="#">
					<i class="pe-7s-piggy"> </i>
					Salary Management
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                 </a>
			   <ul class="vertical-sub6">
					<li>
						
							<i class="metismenu-icon"></i>
							<?php if($_SESSION['desg']=='Teacher' || $_SESSION['desg']=='Super Admin') { ?>
									<a href="update_salary.php?id=<?php echo($_SESSION['id']); ?>">
									View Salary
							<?php } else if($_SESSION['desg']=='Admin') { ?>
									<a href="salary_list.php">
									Update Salary
							<?php } ?>
						</a>
					</li>
				</ul>
			</li>

			<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>
				<li>
					<a href="#">
						<i class="pe-7s-mail-open-file"> </i>
						PTA
	                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
	                 </a>
				   <ul class="vertical-sub7">
						<li>
							<a href="meet_list.php">
								<i class="metismenu-icon"></i>
								Add Meetings
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>

			<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin' ) { ?>
				<li>
					<a href="#">
						<i class="pe-7s-next"> </i>
						Promotions
	                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
	                 </a>
				   <ul class="vertical-sub8">
						<li>
							<a href="promotion_dash.php">
								<i class="metismenu-icon"></i>
								Promotions
							</a>
						</li>
					</ul>
				</li>
		<?php } ?>



			<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>

				<li>
					<a href="#">
						<i class="pe-7s-next-2"> </i>
						Generate TC
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub4">					
						<li>
							<a href="generate_list.php">
								<i class="metismenu-icon"></i>
								All Students
							</a>
						</li>
						<?php for($i=0;$i<count($all_std);$i++) { ?>

							<li>
								<a href="generate_list.php?std=<?php echo($all_std[$i]); ?>">
									<i class="metismenu-icon"></i>
									<?php echo($all_std[$i]); echo($sub_std[$all_std[$i]]); ?>  Std
								</a>
							</li>
						<?php } ?>
					</ul>
				</li>

			<?php } ?>

		<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin') { ?>

			<li>
				<a href="#">
					<i class="pe-7s-filter"> </i>
					Accounts
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                 </a>
			   <ul class="vertical-sub9">
					<li>
						<a href="expenditure_list.php">
							<i class="metismenu-icon"></i>
							Add Expenses
						</a>
					</li>
				</ul>
			</li>

		<?php } ?>

		<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin' ) { ?>

			<li>
				<a href="#">
					<i class="pe-7s-clock"> </i>
					Archives
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                 </a>
			   <ul class="vertical-sub10">
					<li>
						<a href="fees_ar_lt.php">
							<i class="metismenu-icon"></i>
							Fees
						</a>
					</li>

					<li>
						<a href="progress_ar_lt.php">
							<i class="metismenu-icon"></i>
							Progress
						</a>
					</li>

				</ul>
			</li>

			<li>
					<a href="#">
						<i class="pe-7s-box1"> </i>
						Documents
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub17">					
						<li>
							<a href="document_list.php">
								<i class="metismenu-icon"></i>
								Document List 
							</a>
						</li>	
						</ul>
			</li>


			<li>
				<a href="#">
					<i class="pe-7s-medal"> </i>
					Appraisals
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                 </a>
			   <ul class="vertical-sub19">
					<li>
						
							<i class="metismenu-icon"></i>
									<a href="teachers_list_app.php">
									View Appraisals</a>
					</li>
				</ul>
			</li>

			<li>
					<a href="#">
						<i class="pe-7s-car"> </i>
						Bus Details
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub18">					
						<li>
							<a href="bus_list.php">
								<i class="metismenu-icon"></i>
								Bus List 
							</a>
						</li>	
						</ul>
			</li>


			<li>
					<a href="#">
						<i class="pe-7s-global"> </i>
						CCA
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub21">					
						<li>
							<a href="cca_list.php">
								<i class="metismenu-icon"></i>
								CCA List 
							</a>
						</li>	
						</ul>
			</li>


			<?php } ?>



		<?php if($_SESSION['desg']=='Admin' || $_SESSION['desg']=='Super Admin' ) { ?>

			<li>
					<a href="#">
						<i class="pe-7s-science"> </i>
						Stocks
						<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
					</a>
					<ul class="vertical-sub22">					
						<li>
							<a href="item_list.php">
								<i class="metismenu-icon"></i>
								Add Inventory
							</a>
						</li>	
						</ul>

			<li>

			<li>
				<a href="#">
					<i class="pe-7s-graph2"> </i>
					Reports
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                 </a>
			   <ul class="vertical-sub11">
					<li>
						<a href="attandance_report.php">
							<i class="metismenu-icon"></i>
							Attandance Report
						</a>
					</li>
				
					<li>
						<a href="stu_rp.php">
							<i class="metismenu-icon"></i>
							Student Report
						</a>
					</li>
				
					<li>
						<a href="fees_report.php">
							<i class="metismenu-icon"></i>
							Fees Report
						</a>
					</li>
				
					<li>
						<a href="parent_teacher.php">
							<i class="metismenu-icon"></i>
							Parents-Teachet Meet Report
						</a>
					</li>
				
					<li>
						<a href="home_work.php">
							<i class="metismenu-icon"></i>
							H/W Report
						</a>
					</li>

					<li>
						<a href="exp_search.php">
							<i class="metismenu-icon"></i>
							Expenses Report
						</a>
					</li>

					<li>
						<a href="holidays_report.php">
							<i class="metismenu-icon"></i>
							Event Report
						</a>
					</li>
				</ul>
			</li>

		<?php } ?>

			

			
		</ul>
	</div>
 </div>
</div> 