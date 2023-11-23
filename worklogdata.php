<?php
require "connect.php";
$sql_worklog = "INSERT INTO `Worklog` (`WorklogID`, `LastestUpdate`) 
VALUES
('LOG01', '4 minutes ago'),
('LOG02', '2 months ago'),
('LOG03', '1 year ago'),
('LOG04', '2 years ago'),
('LOG05', '3 years ago'),
('LOG06', '16 minutes ago'),
('LOG07', '17 minutes ago'),
('LOG08', '18 minutes ago'),
('LOG09', '19 minutes ago'),
('LOG10', '7 months ago'),
('LOG11', '8 months ago'),
('LOG12', '9 months ago'),
('LOG13', '10 months ago'),
('LOG14', '2 years ago'),
('LOG15', '17 minutes ago'),
('LOG16', '18 minutes ago'),
('LOG17', '45 minutes ago'),
('LOG18', '3 years ago'),
('LOG19', '18 minutes ago'),
('LOG20', '18 minutes ago')";

if ($connect->multi_query($sql_worklog) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Error: " . $sql_worklog . "<br>" . $connect->error;
}

$connect->close();
?>