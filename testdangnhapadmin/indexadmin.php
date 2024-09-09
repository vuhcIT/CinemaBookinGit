<?php 
session_start();

	include("connect.php");
	include("functionsadmin.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        .link-list{
            flex-direction: row;
        }
    </style>
</head>
<body>

	
	
	


<!-- List of links -->
<center>
<ul id="link-list">
    <!-- Placeholder links -->
	<h1>Hello, <?php echo $user_data['UserName']; ?> </h1>
    <li id="link1"> <a href="../admin/admin_phim.php">Thông Tin Phim</a></li>
    <li id="link2"> <a href="../admin/lichtrinh.php">Lịch trình chiếu phim</a></li>
    <li id="link3"> <a href="registeradmin.php">Đăng kí admin</a></li>
    <li id="link4"> <a href="../admin/lichsudatve.php">Lịch sử đặt vé</a></li>
	<a href="logoutadmin.php">Logout</a>
    
</ul>
</center>
</body>
</html>
<script>
    // Function to update links based on dropdown selection
    document.getElementById('link-options').ad