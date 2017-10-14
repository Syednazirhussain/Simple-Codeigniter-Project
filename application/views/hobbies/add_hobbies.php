<h1>Please Provide Hobbies</h1>
<?php //echo $id; ?>
<form method="post" action="Adding">
    Hockey
    <span>
        <input type="radio" name="hockey" value="1" checked>&nbsp;Yes
        <input type="radio" name="hockey" value="0" >&nbsp;No
    </span><br>
    Tennis
    <span>
        <input type="radio" name="tennis" value="1" checked>&nbsp;Yes
        <input type="radio" name="tennis" value="0" >&nbsp;No
    </span><br>
    Football
    <span>
        <input type="radio" name="football" value="1" checked>&nbsp;Yes
        <input type="radio" name="football" value="0" >&nbsp;No
    </span><br>
    Circket
    <span>
        <input type="radio" name="circket" value="1" checked>&nbsp;Yes
        <input type="radio" name="circket" value="0" >&nbsp;No
    </span><br>
    <br><br>
    <input type="hidden" name="personid" value="<?php echo $id; ?>">
    <input type="submit" name="submit" value="ADD">
</form>