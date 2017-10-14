<?php //print_r($person);die();
// Array ( [0] => Array ( [circket] => 1 [tennis] => 0 [football] => 1 [hockey] => 0 [personid] => 1 ) )
?>
<h1>Edit Hobbies</h1>
<form method="post" action="http://localhost/ci/Hobbies/update">
    Hockey
    <span>
        <input type="radio" name="hockey" value="1" <?php if ($person[0]['hockey'] == 1){ echo "checked"; } ?>>&nbsp;Yes
        <input type="radio" name="hockey" value="0" <?php if ($person[0]['hockey'] == 0){ echo "checked"; } ?>>&nbsp;No
    </span><br>
    Tennis
    <span>
        <input type="radio" name="tennis" value="1" <?php if ($person[0]['tennis'] == 1){ echo "checked"; } ?>>&nbsp;Yes
        <input type="radio" name="tennis" value="0" <?php if ($person[0]['tennis'] == 0){ echo "checked"; } ?>>&nbsp;No
    </span><br>
    Football
    <span>
        <input type="radio" name="football" value="1" <?php if ($person[0]['football'] == 1){ echo "checked"; } ?>>&nbsp;Yes
        <input type="radio" name="football" value="0" <?php if ($person[0]['football'] == 0){ echo "checked"; } ?>>&nbsp;No
    </span><br>
    Circket
    <span>
        <input type="radio" name="circket" value="1" <?php if ($person[0]['circket'] == 1){ echo "checked"; } ?>>&nbsp;Yes
        <input type="radio" name="circket" value="0" <?php if ($person[0]['circket'] == 0){ echo "checked"; } ?>>&nbsp;No
    </span><br><br>
    <input type="hidden" name="personid" value="<?php echo $person[0]['personid'] ?>">
    <input type="submit" name="submit" value="Update">
</form>