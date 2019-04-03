<?php
require("header.php");
require("userClass.php");
$path = $_SERVER['DOCUMENT_ROOT'].'/Assignments/LProject/Photos/';
if ($_FILES['the_file']['error'] > 0)
{
  echo 'Problem: ';
  switch ($_FILES['the_file']['error'])
  {
    case 1:
    echo 'File exceeded upload_max_filesize.';
    break;

    case 2:
    echo 'File exceeded max_file_size.';
    break;

    case 3:
    echo 'File only partially uploaded.';
    break;

    case 4:
    echo 'No file uploaded';
    break;

    case 6:
    echo 'Cannot upload file: No temp directory specified.';
    break;

    case 7:
    echo 'Upload failed: Cannot write to disk.';
    break;

    case 8:
    echo 'A PHP extension blocked the file upload.';
    break;
  }
  exit;
}
//Does this file have the right MIME type?
if ($_FILES ['the_file']['type'] != 'image/jpeg')
{
  echo 'Problem: file is not a JEPG image.';
  exit;
}

//put the file where we'd like it
$uploaded_file = $path .$_FILES['the_file']['name'];
$Profile = $_FILES['the_file']['name'];

if (is_uploaded_file($_FILES ['the_file']['tmp_name']))
{
  if(!move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file))
  {
  echo 'Problem: Could not move file to destionation directory.';
  exit;
}
}
else
{
  echo 'Problem: Possible file upload attack. Filename: ';
 echo $_FILES ['the_file']['name'];
  exit;
}
echo 'File uploaded successfully.';
session_start();

$user = new user('','');
$user->personNam = $_SESSION['valid_user'];
$user->PathIm = $Profile;

$user->connect();
$user->updatePath();
$user->close();

echo 'test';

//show what was uploaded
echo '<p>Profile Pict:<br/>';
echo '<img src="./Photos/'.$_FILES['the_file']['name'].'"/>';

require("footer.php");

?>
