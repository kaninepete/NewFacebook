<?php

?>
<div id=newpost>
  <form method="post" action="post.php"><ul>
    <li name="Owner"><?php echo $user_data['Name']?></li>
    <li><textarea  name="Content" cols="45" rows="5">Type whatever you feel like man.</textarea></li>
    <li><input type="submit" value="Submit"></li></ul>
  </form>
</div><!--newpost-->
