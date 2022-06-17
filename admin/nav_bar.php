			<nav class = "navbar navbar-header navbar-dark bg-dark">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<a href="../index.php" ><p class = "navbar-text pull-right">CARSU STUDENT ACTIVITY ATTENDANCE SYSTEM</p></a>
				</div>
				<div class = "nav navbar-nav navbar-right">
					<a href="logout.php" class="text-light"><?php echo $user_name ?> <i class="fa fa-power-off"></i></a>
				</div>
			</div>
		</nav>
		<div id="sidebar" class="bg-dark">
			<div id="sidebar-field">
				<a href="home.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-dashboard"> </i></div>  Dashboard
				</a>
			</div>
			<div id="sidebar-field">
				<a href="student.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-columns"> </i></div>  Student List
				</a>
			</div>
			<div id="sidebar-field">
				<a href="attendance.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-list"> </i></div>  Attendance List
				</a>
			</div>
			<div id="sidebar-field">
				<a href="admin.php" class="sidebar-item">
						<div class="sidebar-icon"><i class="fa fa-users"> </i></div>  Administrator List
				</a>
			</div>

		</div>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})
			
		</script>