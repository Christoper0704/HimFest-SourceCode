<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>ADMIN DASHBOARD</title>
    	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
    <!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- popper js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- bootstrap scripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/admindashboard.css')?>">
</head>
<body>
    <!-- Navbar -->
    <header>
    <button class="btn" id="menu-btn"><i class="fas fa-bars"></i></button>
        <div class="left_area">
            <h3>Admin <span>Panel</span></h3>
        </div>
        <div class="right_area">
            <a href="{{ route('auth.logout') }}" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- End of Navbar -->

    <!-- Sidebar-->
    <div class="sidebar" id="sidebar">
		<center>
			<h4>{{ $LoggedUserInfo['name'] }}</h4>
		</center>
        <ul id="myTab" role="tablist">
            <li>
            <a href="#nav-admin" id="admin-tab" class="nav-link text-light pl-4 active" role="tab" data-toggle="tab" aria-controls="nav-admin" aria-selected="true">Dashboard</a></li>
            </li>
            <li>
            <a href="#nav-team" id="team-tab" class="nav-link text-light pl-4" role="tab" data-toggle="tab" aria-controls="nav-team" aria-selected="false">Team</a></li>
            </li>
            <li>
            <a href="#nav-member" id="member-tab" class="nav-link text-light pl-4" role="tab" data-toggle="tab" aria-controls="nav-member" aria-selected="false">Member</a></li>
            </li>
            <li>
            <a href="#nav-messages" id="messages-tab" class="nav-link text-light pl-4" role="tab" data-toggle="tab" aria-controls="nav-messages" aria-selected="false">Messages</a></li>
            </li>
        </ul>
	</div>

    <!-- End of Sidebar-->

    <!-- Body content -->
    <section class="my-container" id="nav-dashboard">
        <div class="col-md-12 w-30">
            <div class="tab-content flex-center" id="myTabContent">
                <div class="tab-pane fade show active" id="nav-admin" role="tabpanel" aria-labelledby="admin-tab">
                    <p>Admin Dashboard</p>
                </div>
                <div class="tab-pane fade" id="nav-team" role="tabpanel" aria-labelledby="team-tab">
                    <h3>Teams : 26</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Team ID</th>
                            <th scope="col">Team Name</th>
                            <th scope="col">Leader ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Referrer</th>
                            <th scope="col">Status</th>
                            <th scope="col">Update</th>
                            <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($team as $teams)
                            <tr>
                            <th scope="row">{{  $teams['id'] }}</th>
                            <td>{{  $teams['name'] }}</td>
                            <td>{{  $teams['leader_id'] }}</td>
                            <td>{{  $teams['category'] }}</td>
                            <td>{{  $teams['referrer'] }}</td>
                            <td>Belum bayar</td>
                            <form action="#" method="POST">
                                <td><button name="update" type="submit" value="1" class="update_btn"><span class="badge bg-success"><i class="fas fa-check"></i></span></button>
                                <button name="update" type="submit" value="2" class="update_btn"><span class="badge bg-danger"><i class="fas fa-times"></i></span></button>
                            </td>
                            </form>
                            <form action="#" method="POST">
                                <td><button name="download" type="submit" value="1" class="download_btn"><i class="fas fa-download"></i></button>
                            </td>
                            </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-member" role="tabpanel" aria-labelledby="member-tab">
                <h3>Members : 126</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Member ID</th>
                            <th scope="col">Team ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Line ID</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Student Card</th>
                            <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($member as $members)
                            <tr>
                            <th scope="row">{{  $members['member_id'] }}</th>
                            <td>{{  $members['team_id'] }}</td>
                            <td>{{  $members['name'] }}</td>
                            <td>{{  $members['email'] }}</td>
                            <td>{{  $members['lineid'] }}</td>
                            <td>{{  $members['phone'] }}</td>
                            <td>{{  $members['studentcard'] }}</td>
                            <form action="#" method="POST">
                                <td><button name="download" type="submit" value="1" class="download_btn"><i class="fas fa-download"></i></button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="messages-tab">
                    <p>Messages Dashboard</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Body content-->

    <!-- custom js-->
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click",()=>{sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")})
    </script>
    <!-- -->
</body>
</html>