<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'ercelstore';

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Can not connect to database" . mysqli_connect_error());
}

function filter($data)
{
    foreach ($data as $key => $value) {
        // trim(); // remove extra spaces
        // stripslashes(); // remove backward slashes
        // htmlspectialchars(); // html special characters convert into html entities
        // strip_tags(); // remove html tags or block to run
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    // $query = "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?";
    // $values = [$frm_data['email'], $frm_data['password']];
    // $datatypes = "ss"; // email is string type and password is string type
    // select($query, $values, $datatypes);
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query can not be executed - select");
        }
    } else {
        die("Query can not be prepared - select");
    }

}

?>