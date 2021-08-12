<html lang="en">
<head>
    <meta charset="ISO-8859-1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Feedback Form</title>
    <style>

body{
		background: url(img/tablebg.jpg);
		height: 100vh;
		-webkit-background-size: cover;
		background-size: cover;
		background-position: center center;
		position: relative;
	}

.header{
    color: black;
	text-align: center;
	margin-top: 5rem;
	margin-bottom: 5rem;
	font-size:40px
}
/*
th{
    color: black;

}

th{
    color: black;
    font-family: Georgia, serif;
    font-size: 20px;
    font-weight: bold;
    background-color: #d8f0f2;  
}*/


.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 8px 8px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #1abc9c;
  color: #fff;
  text-align: left;
  font-size: 18px;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #ccccff;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #1abc9c;
}

.content-table tbody tr.active-row {
    font-size: 15px;
}

    </style>    
</head>
<body>
		<div class="container" >
			<div class="row" >
				<div class="col-sm-2">
				<img src="img/feedtable.svg" style="height: 30rem; width: 30rem; margin-left: 43rem;" >
				</div>
			</div>
		</div>

        <div class="header" style="margin-top: 1rem;">
		<p style="color: #1abc9c;
		font-family: Georgia, serif;
		font-size: 40px;
		font-weight: bold;
		">User Feedbacks</p>
		</div>

	<div class="content-blog"  >
		<div class="container" >
			<table class="table table-striped content-table" style="margin-top: -1rem;">
				<thead>
					<tr>
					  <th>Name</th>
					  <th>Mobile No.</th>
					  <th>Email</th>
					  <th>Feedback</th>
					</tr>
				  </thead>
				<?php
						$conn = mysqli_connect("localhost", "root", "", "paperhouse");
						// Check connection
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM feedback";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "
						<tr>
						<td>" . $row["cust_name"]. "</td>
						<td>" . $row["cust_mob_number"] . "</td>
						<td>" . $row["cust_email"]. "</td>
						<td>" . $row["feedback"]. "</td>
						</tr>";
						}
						echo "</table>";
						} else { echo "0 results"; }
						$conn->close();
						?>
			</table>
		</div>
	</div>
</body>
</html>
