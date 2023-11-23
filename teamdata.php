<?php
require "connect.php";
$sql_team = "INSERT INTO `Team` (`TeamID`, `TeamName`) 
VALUES
('G01', 'Designers'),
('G02', 'IT'),
('G03', 'Testing'),
('G04', 'Content Creators'),
('G05', 'Finance'),
('G06', 'Research'),
('G07', 'Product Management'),
('G08', 'Marketing'),
('G09', 'HR'),
('G10', 'Developers'),
('G11', 'Quality Assurance')";

if ($connect->query($sql_team) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Error: " . $sql_team . "<br>" . $connect->error;
}

$connect->close();
?>