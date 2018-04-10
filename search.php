<?php
	session_start();

	$search= $_GET['search'];
	
	if($search == '') 
		echo "you didn't submit a keyword"; 
	else { 
		if( strlen( $search )<= 1) 
			echo "Search term too short 
					</br>
					<html>
					<button onclick=\"goBack()\">Back</button>
					<script>
					
					function goBack() {
						window.history.back();
					}
					</script>
					</body>
					</html>
					";
		else { 
			echo "You searched for <b> $search </b> <hr size='1'> </br>"; 	
			$servername= "localhost";
			$username = "root";		
			$password= "";
			$dbname= "jucommunity";
			$con = new mysqli($servername,$username,$password,$dbname);
				
			$search_exploded = explode(" ", $search ); 
			$x = 0; 
			foreach($search_exploded as $search_each ) 
			{
				$x++; 
				$construct = ""; 
				if( $x == 1 ) 
					$construct.="pagecontent LIKE '%$search_each%'"; 
				else 
					$construct.="AND pagecontent LIKE '%$search_each%'"; 
			} 
			
			$construct= "SELECT * FROM jobsearchengine WHERE $construct"; 
			$run=mysqli_query($con,$construct); 
			
			$foundnum=mysqli_num_rows($run); 
			
			if($foundnum == 0) 
				echo "Sorry, there are no matching result for <b>$search</b>.</br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling 
					</br>
					<html>
					<button onclick=\"goBack()\">Back</button>
					<script>
					
					function goBack() {
						window.history.back();
					}
					</script>
					</body>
					</html>
					";
			else { 
				echo "$foundnum results found !<p>";
				while( $runrows = mysqli_fetch_assoc($run))
					{
						echo "<table border='1'>
						<tr>
						<th>ID</th>
						<th>Job Name</th>
						<th>Job Details</th>
						<th>Address</th>
						</tr>"; 
					}
					echo "
					<html>
					<button onclick=\"goBack()\">Back</button>
					<script>
					function goBack() {
						window.history.back();
					}
					</script>
					</body>
					</html>
					";
				 } 
			} 
		}


	
	
?>
