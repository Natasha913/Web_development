<?php
	include 'controllers/BookController.php';
	$books = getBooks();
	
?>
<html>
             <head>
			 <link rel="stylesheet" href="style/login.css">
	        
			 <style>
.red {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.red1 {
  background-color: #ff0000;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.red2 {
  background-color: #0080ff;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.box{
  border: 3px solid black;
  margin: 0;
  width: 100%;
  height: 30px;

}
</style>
			 </head>
<body>
         <div>
			<h3 class="header">All Books </h3>
			<a  href="book_cllc.php" class="red2" >Back</a>
			
			</div>
			<div>
			<input type="text" class="box" onkeyup= "searchBook(this)" placeholder ="Search Book">
			</div>
			<div id ="suggesstion"></div>
			<br> 
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th> Name  &nbsp </th>
		  	<th>Quantity  &nbsp </th>
			<th>Category  &nbsp </th>
			<th>price  &nbsp </th>
			<th>Description  &nbsp </th>
			<th>image</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($books as $b){
					$id = $b["id"];
					echo "<tr>";
						echo "<td> &nbsp $i</td>";
						echo "<td>".$b["name"]. "</td>";
						echo "<td>".$b["quantity"]. "</td>";
						echo "<td>".$b["categories"]. "</td>";
						echo "<td>".$b["price"]. "</td>";
						echo "<td>".$b["description"]. "</td>";
						echo "<td><img width = '80px' height='100px' src= '".$b["pimage"]."'</td>";
					    echo '<td><a href="editbook.php?id='.$id.'" class="red">  Edit</a></td>';
						echo '<td><a href="deletebook.php?id='.$id.'" class="red1">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<script src ="js/books.js"></script>
</body>
</html>