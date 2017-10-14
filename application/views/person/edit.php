
<form method="post" action="http://localhost/ci/person/update">
    <input type="hidden" name="id" value="<?php echo $subject[0]['id']; ?>">
    <input type="text" name="name" value="<?php echo $subject[0]['name']; ?>">
    <input type="submit" name="submit" value="Update">

</form>