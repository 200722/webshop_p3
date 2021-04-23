<?php
$id = $_GET["id"];
// echo $id;

?>
<form method="POST" action="review.php?id=<?php echo $id ; ?>">

    <label type="number">review</label>
    <input name ="review" type="number"min="1" max="5" value="review">
    <label for="text">opmerking</label>
    <input name ="opmerking" type="text">
    <input type="submit" value="Submit">
  </form> 