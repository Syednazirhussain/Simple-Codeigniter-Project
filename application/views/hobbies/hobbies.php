<h1>Your Hobbies</h1>
<table>
    <tr>
        <td>Playing Circket</td>
        <td>
            <?php
            if ($person[0]['circket'] == 1){
                echo "Yes";
            }else{
                echo "No";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Playing Football</td>
        <td>
            <?php
            if ($person[0]['football'] == 1){
                echo "Yes";
            }else{
                echo "No";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Playing Tennis</td>
        <td>
            <?php
            if ($person[0]['tennis'] == 1){
                echo "Yes";
            }else{
                echo "No";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Playing Hockey</td>
        <td>
            <?php
            if ($person[0]['hockey'] == 1){
                echo "Yes";
            }else{
                echo "No";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td><a href="edit/<?php echo $person[0]['personid'] ?> ">Edit</a></td>
        <td><a href="delete/<?php echo $person[0]['personid'] ?> ">Delete</a></td>
    </tr>
</table>