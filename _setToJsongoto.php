<?php
$data = json_decode(file_get_contents('gotoLanguage.json'), true);

echo "Name: " . $data['name'] . "<br>";
echo "Family: " . $data['family'] . "<br>";
echo "Age: " . $data['age'] . "<br>";
echo "Email: " . $data['email'] . "<br>";
echo "Developer: " . $data['developer'];
?>
