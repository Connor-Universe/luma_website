<nav class="navbar navbar-default navbar-account"> 
	<div class="container">
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="dashboard.php"><i class="zmdi zmdi-account-box"></i> Dashboard</a></li>
				<li><a href="deposit.php"><i class="zmdi zmdi-card"></i> Deposit</a></li>
				<li><a href="deposit_list.php"><i class="zmdi zmdi-chart"></i> Your Deposits</a></li>
				<li><a href="history.php"><i class="zmdi zmdi-receipt"></i> Transactions</a></li>
				<li><a href="withdraw.php"><i class="zmdi zmdi-balance-wallet"></i> Withdraw</a></li>
				<li><a href="referal.php"><i class="zmdi zmdi-accounts-alt"></i> Referrals</a></li>
				<li></li>
			</ul> 
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"> <a href="" class="dropdown-toggle user-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-account-circle"></i> <?php echo"$username";?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="dashboard.php">Dashboard</a></li>
						
							<li><a href="settings.php">Settings</a></li>
                            <li><a href="password.php">Change Password</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="?logout">Logout</a></li>
						</ul>
					</li>
				</ul>
				</div>
				</div>
				</nav>
