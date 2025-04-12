<?php
include 'dbconnection.php';

if (isset($_POST['register_btn'])) {
    // Get user inputs
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Verify unique email address using prepared statement
    $verify_stmt = $conn->prepare("SELECT email FROM customers WHERE email = ?");
    $verify_stmt->bind_param("s", $email);
    $verify_stmt->execute();
    $verify_stmt->store_result();

    if ($verify_stmt->num_rows > 0) {
        echo "<script>
            alert('Email already exists. Please login.');
            window.location.href='index.php?loginModal=true';
        </script>";
        exit();
    } else {
        // Check if password and confirm password match
        if ($password !== $cpassword) {
            echo "<script>
                alert('Passwords do not match!');
                window.history.back();
            </script>";
            exit();
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert the data into the database using prepared statement
            $insert_stmt = $conn->prepare("INSERT INTO customers (fname, lname, email, phone, gender, dob, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insert_stmt->bind_param("sssssss", $fname, $lname, $email, $phone, $gender, $dob, $hashed_password);

            if ($insert_stmt->execute()) {
                echo "<script>
                    alert('Registration Successful! Please login.');
                    window.location.href='index.php?loginModal=true';
                </script>";
                exit();
            } else {
                echo "<script>
                    alert('Data insertion failed: " . $conn->error . "');
                    window.history.back();
                </script>";
                exit();
            }
        }
    }
} else {
    echo "<h1>No data submitted!</h1>";
}
?>