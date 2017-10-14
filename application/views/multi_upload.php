<html>
<head>
    <title>Upload Form</title>
</head>
<body>
<?php
$attributes = array('enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8');
echo form_open('MultipleUploads/Upload', $attributes);
?>
<fieldset>
    <label>Title * : </label>
    <input type="text" class="text-long" value="" name="title">

    <label>Description : </label>
    <textarea class="mceEditor" rows="10" cols="40" name="description"></textarea>

    <label>Image : </label>
    <input type="file" multiple="" name="images[]">

    <button class="button-submit" type="submit" name="save" id="">Save</button>
</fieldset>

</form>

</body>
</html>
