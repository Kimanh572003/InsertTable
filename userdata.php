<?php
require "connect.php";

$sql_user = "INSERT INTO `User` (`UserID`, `Name`, `Email`, `Role`, `Status`) VALUES
('ST01', 'Joe Alwyn', 'joealwyn@gmail.com', 'Admin', 'Active'),
('ST02', 'Hailey Rhode', 'haileyrhode@gmail.com', 'Regular User', 'Active'),
('ST03', 'Bonnie Wright', 'bonniewright@gmail.com', 'Regular User', 'Active'),
('ST04', 'Phoebe Nevor', 'phoebenevor@gmail.com', 'Regular User', 'In Active'),
('ST05', 'India Amart', 'indiaamart@gmail.com', 'Regular User', 'Active'),
('ST06', 'Louis Partrid', 'louispatrid@gmail.com', 'Regular User', 'Active'),
('ST07', 'Emma Wasson', 'emmawasson@gmail.com', 'Admin', 'Active'),
('ST08', 'Millie Bobby', 'milliebobby@gmail.com', 'Regular User', 'In Active'),
('ST09', 'Corey Mylch', 'coreymylch@gmail.com', 'Regular User', 'Active'),
('ST10', 'Jenai Sante', 'jenaisante@gmail.com', 'Regular User', 'Active'),
('ST11', 'Aeri Giselle', 'aerigiselle@gmail.com', 'Regular User', 'Active'),
('ST12', 'Mione Granger', 'mionegranger@gmail.com', 'Regular User', 'Active'),
('ST13', 'Alicia Keys', 'aliciakeys@gmail.com', 'Regular User', 'Active'),
('ST14', 'Connie Jenkin', 'conniejenkin@gmail.com', 'Regular User', 'Active'),
('ST15', 'Freddie Denn', 'freddiedenn@gmail.com', 'Admin', 'Active'),
('ST16', 'Sam Clemet', 'samclemet@gmail.com', 'Regular User', 'In Active'),
('ST17', 'Rupert Evan', 'rupertevan@gmail.com', 'Regular User', 'Active'),
('ST18', 'Ashley Cains', 'ashleycains@gmail.com', 'Regular User', 'Active'),
('ST19', 'Julia Quinn', 'juliaquinn@gmail.com', 'Regular User', 'In Active'),
('ST20', 'Jess Mads', 'jessmads@gmail.com', 'Regular User', 'Active')";

if ($connect->multi_query($sql_user) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Error: " . $sql_user . "<br>" . $connect->error;
}

$connect->close();
?>