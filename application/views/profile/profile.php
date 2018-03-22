	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/UserProfile/user.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<div class="banner">
			<div class="side">
				<ul class="sidemenu">
					<li><a href="<?php echo site_url('/ProfileView/index');?>">My Account</a>
							<ul>
								<li><a href="<?php echo site_url('ProfileView/bankcards');?>">Bank Cards</a></li>
								<li><a href="<?php echo site_url('ProfileView/addresses');?>">Addresses</a></li>
								<li><a href="<?php echo site_url('ProfileView/changepw');?>">Change Password</a></li>
							</ul>
					</li>
					<li><a href="<?php echo site_url('ProfileView/mypurchase');?>">My Purchase</a></li>
				</ul>
			</div>
			<div class="content">
				<h4>My Profile</h4>
				<p>Manage and Protect your Account</p>
				<?php if($user['c_fname']==NULL):?>
					<div class="edit-profile">
						<?php echo validation_errors(); ?>
                        <?php echo form_open('profile/update/');?>
						<form>
		                   	<input name="fname" type="text" placeholder="First Name" required>
		                   	<input name="mname" type="text" placeholder="Middle Name" required>
		                   	<input name="lname" type="text" placeholder="Last Name" required>
		                    <div class="button-edit">
			                	<button type="submit" class="btn-saveedit">Save</button>
			             	</div>
		            	</form>
	                </div>
            	<?php else:?>
            		<div class="table-align">
						<table class="table-info">
                    		<tr>
                        		<td>First Name:</td>
                        		<td><?php echo $user['c_fname'];?></td>
                      		</tr>

		                    <tr>
                        		<td>Middle Name:</td>
                       	 		<td><?php echo $user['c_mname'];?></td>
                      		</tr>

		                    <tr>
                        		<td>Last Name:</td>
                        		<td><?php echo $user['c_lname'];?></td>
                      		</tr>

                      		<tr>
                        		<td>Phone Number:</td>
                        		<td><?php echo $user['c_pno'];?> </td>
                      		</tr>
                  		</table>

                  		<div class="editinfo">
							<a href="<?php echo site_url('/ProfileView/profile_edit');?>" class="btn-editinfo">Change It </a>
						</div>
					</div>
            	<?php endif;?>
			</div> 	
	</div>
	<br>
	<br>
	<br>
	<br>