
<?php
	include ("config.php");
    $fetchingData = mysqli_query($db, "SELECT * FROM candidate_details") or die(mysqli_error($db)); 
    $isAnyCandidateAdded = mysqli_num_rows($fetchingData);
    if($isAnyCandidateAdded > 0)
                    {
                        while($row = mysqli_fetch_assoc($fetchingData))
                        {
                            $election_id = $row['id'];
                        }
	$sql="DELETE FROM candidate_details where id=$election_id";
	if ($db->query($sql))
	echo "deleted";
	else
	echo "error";
                    }
?>