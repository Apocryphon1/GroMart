<?php
$vote = $_REQUEST['vote'];


$yesResult = 59;
$noResult = 4;




if ($vote == 1) {
  $yesResult = $yesResult + 1;
}
if ($vote == 0) {
  $noResult = $noResult + 1;
}





?>

<h1>Results:</h1>
<table>
<tr>
 <img src = "../images/like_and_dislike.png" height="100px" width="200px" >
 <td></td>
 <td></td>
 <td></td>
 <td><h3>---</h3></td>
<td> <h3>Yes: </h3></td>
<td> <h3>
<?php echo $yesResult ; ?>
</h3></td> </br>
<td></td>
<td></td>
<td></td>
<td><h3>---</h3></td>
<td><h3>No:</h3></td>
<td> <h3>
<?php echo $noResult; ?>
</h3></td> </br>
</tr>

</table>