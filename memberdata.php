<?php
require "connect.php";

$sql_member = "INSERT INTO `Member` (`TeamID`, `UserID`, `TeamName`) 
VALUES
('G01', 'ST01', 'Designers'),
('G01', 'ST02', 'Designers'),
('G02', 'ST03', 'IT'),
('G03', 'ST04', 'Testing'),
('G03', 'ST05', 'Testing'),
('G04', 'ST06', 'Content Creators'),
('G04', 'ST07', 'Content Creators'),
('G05', 'ST08', 'Finance'),
('G05', 'ST09', 'Finance'),
('G06', 'ST10', 'Research'),
('G06', 'ST11', 'Research'),
('G07', 'ST12', 'Product Management'),
('G07', 'ST13', 'Product Management'),
('G08', 'ST14', 'Marketing'),
('G08', 'ST15', 'Marketing'),
('G09', 'ST16', 'HR'),
('G09', 'ST17', 'HR'),
('G10', 'ST18', 'Developers'),
('G10', 'ST19', 'Developers'),
('G02', 'ST20', 'IT'),
('G11', 'ST01', 'Quality Assurance'),
('G10', 'ST02', 'Developers'),
('G09', 'ST03', 'HR'),
('G08', 'ST04', 'Marketing'),
('G07', 'ST05', 'Product Management'),
('G06', 'ST06', 'Research'),
('G05', 'ST07', 'Finance'),
('G04', 'ST09', 'Content Creators'),
('G03', 'ST10', 'Testing'),
('G02', 'ST11', 'IT'),
('G01', 'ST12', 'Designers'),
('G07', 'ST13', 'Product Management'),
('G11', 'ST14', 'Quality Assurance'),
('G09', 'ST15', 'HR'),
('G05', 'ST16', 'Finance'),
('G03', 'ST17', 'Testing')";

if ($connect->query($sql_member) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Error: " . $sql_member . "<br>" . $connect->error;
}

$connect->close();
?>