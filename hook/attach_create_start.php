
$file = $_FILES['editormd-image-file'];

$is_image = 1;
$name = $file['name'];
$data = file_get_contents($file['tmp_name']);

list($width, $height, $type, $attr) = getimagesize($file['tmp_name']);

$ajax = true;
