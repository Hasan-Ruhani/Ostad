<?php
	include_once("function.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
<body>
	<table class="table">
	<thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
		<tbody>
			<?php
				// Read user information from CSV file
				$file = fopen("C:\\xampp\\htdocs\\Test\\hasan\\users.csv", "r");
				if ($file !== FALSE) {
					// while (($data = fgetcsv($file)) !== FALSE) {
					// 	echo "<tr>";
					// 	echo "<td>".$data[0]."</td>";
					// 	echo "<td>".$data[1]."</td>";
					// 	echo "<td><img src='uploads/".$data[2]."' width='100'></td>";
					// 	echo "</tr>";
					// }
					
					$data = fgetcsv($file);
					$counter = 1;
					foreach ($data as $datas) {
						echo "<tr>";
						echo "<th scope='row'>" . $counter . "</th>";
						echo "<td>" . $datas['name'] . "</td>";
						echo "<td>" . $datas['email'] . "</td>";
						echo "<td>" . $datas['profile-picture'] . "</td>";
						echo "</tr>";
						$counter++;
					  }
					fclose($file);
				} else {
					echo "<tr><td colspan='3'>No data found</td></tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
