<?php
require "connect.php";
$sql_folder = "INSERT INTO `Folder` (`TeamID`, `FolderID`, `FolderName`, `Privacy`) 
VALUES
('G01', 'FD01', 'Design Mockups', 'public'),
('G01', 'FD02', 'UX/UI Concepts', 'public'),
('G02', 'FD03', 'Project Plans', 'private'),
('G02', 'FD04', 'Data Backups', 'public'),
('G02', 'FD05', 'System Upgrades', 'public'),
('G02', 'FD06', 'Software Development', 'public'),
('G03', 'FD07', 'Test Scripts', 'private'),
('G03', 'FD08', 'Testing Tools', 'public'),
('G03', 'FD09', 'Test Automation', 'public'),
('G03', 'FD10', 'Regression Testing', 'public'),
('G03', 'FD11', 'Bug Reports', 'private'),
('G03', 'FD12', 'User Acceptance Test', 'private'),
('G04', 'FD13', 'Social Media Content', 'public'),
('G04', 'FD14', 'Video Production', 'public'),
('G05', 'FD15', 'Financial Planning', 'public'),
('G05', 'FD16', 'Financial Reports', 'public'),
('G06', 'FD17', 'Survey Results', 'private'),
('G07', 'FD18', 'Customer Feedback', 'private'),
('G07', 'FD19', 'Product Documentation', 'public'),
('G07', 'FD20', 'Feature Planning', 'public'),
('G08', 'FD21', 'Marketing Materials', 'public'),
('G08', 'FD22', 'SEO Optimization', 'public'),
('G09', 'FD23', 'Job Applications', 'public'),
('G09', 'FD24', 'Training Materials', 'public'),
('G09', 'FD25', 'Job Postings', 'public'),
('G09', 'FD26', 'Performance Reviews', 'private'),
('G10', 'FD27', 'Knowledge Base', 'public'),
('G10', 'FD28', 'Development Plans', 'public'),
('G11', 'FD29', 'Regression', 'public')";
if ($connect->query($sql_folder) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Error: " . $sql_folder . "<br>" . $connect->error;
}

$connect->close();
?>