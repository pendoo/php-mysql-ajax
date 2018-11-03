<?php

include("db.php");
		
		if(isset($_POST['search'])){
			
		$code = mysqli_real_escape_string($con,$_POST['search']);
		
		$Query = "SELECT * FROM database WHERE field1 LIKE '%$code1%' OR field2 LIKE '%$code2%'";//more fields can be added to the query

		$ExecQuery = mysqli_query($con,$Query);

		echo "<table class='table table-bordered'><tr><th>Header</th><th>Header
		</th></tr>";//more headers can be added here
		
		while ($Result = mysqli_fetch_array($ExecQuery)) {
		$field1 = $Result['field1'];
		$field2 = $Result['field2'];//add more fields here and in $output_string if needed
		
		$output_string = "<tr><td>$field1</td><td>$field2</td></tr>";?>
		
   <a>
       <?php echo $output_string; ?>

   </div></a>

   <?php

}}

?>

</table>