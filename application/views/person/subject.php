<a href="add">ADD</a>
<table>

    <thead>
        <th>Person ID</th>
        <th>Person Name</th>
        <th>Status</th>
    </thead>
    <tbody>
    <?php for ($i=0; $i < count($subject); $i++) { ?>
            <tr>
                <td> <?php echo $subject[$i]['id']; ?> </td>
                <td> <?php echo $subject[$i]['name']; ?> </td>
                <td><a href="edit/<?php echo $subject[$i]['id'] ?> ">Edit</a> / <a href="delete/<?php echo $subject[$i]['id'] ?> ">Delete</a> / <a href="http://localhost/ci/Hobbies/<?php echo $subject[$i]['id'] ?> ">Hobbies</a></td>
            </tr>
       <?php } ?>

    </tbody>
</table>