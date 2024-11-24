<?php

print_r($_POST);
print_r($_FILES);
// print_r($_POST['image']['name']);

exit;
$result = array(
    'id' => 1,
    'name' => 'AnDN',
);

echo json_encode($result);