<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'students';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate form data
function validateFormData($stName, $stAddress, $stMedical, $stClass, $ptName, $ptPhone, $ptEmail, $ptAddress) {
    $errors = array();
    if (empty($stName)) {
        $errors[] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $stName)) {
        $errors[] = "Only letters and white space allowed";
    }
    if (empty($stAddress)) {
        $errors[] = "Address is required";
    }
    if (empty($stMedical)) {
        $errors[] = "Medical information is required";
    }
    if (empty($stClass)) {
        $errors[] = "Class is required";
    }
    if (empty($ptName)) {
        $errors[] = "Parent name is required";
    }
    if (empty($ptPhone)) {
        $errors[] = "Parent phone is required";
    }
    if (empty($ptEmail)) {
        $errors[] = "Parent email is required";
    }
    if (empty($ptAddress)) {
        $errors[] = "Parent address is required";
    }
    return $errors;
}

// Function to execute query for student data
function executeQueryStudent($conn, $stName, $stDob, $stAddress, $stMedical, $stClass, $teacher_name) {
    $stmt = $conn->prepare("INSERT INTO studentdata (name,DOB, address, medical, class, teacherName) VALUES (?,?, ?, ?, ?,?)");
    if (!$stmt) {
        return false;
    }
    $stmt->bind_param("ssssss", $stName, $stDob, $stAddress, $stMedical, $stClass, $teacher_name);
    if (!$stmt->execute()) {
        return false;
    }
    return $conn->insert_id;
}

// Function to execute query for parents data
function executeQueryParents($conn, $student_id, $ptName, $ptPhone, $ptEmail, $ptAddress) {
    $stmt = $conn->prepare("INSERT INTO parents (student_id, parent_name, parent_phone, parent_email, parent_address) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        return false;
    }
    $stmt->bind_param("issss", $student_id, $ptName, $ptPhone, $ptEmail, $ptAddress);
    if (!$stmt->execute()) {
        return false;
    }
    return true;
}

// Validate form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stName = trim($_POST['stname']);
    $stDob = trim($_POST['stdob']);
    $stAddress = trim($_POST['staddress']);
    $stMedical = trim($_POST['stmedical']);
    $stClass = trim($_POST['stclass']);
    $ptName = trim($_POST['ptname']);
    $ptPhone = trim($_POST['ptphone']);
    $ptEmail = trim($_POST['ptemail']);
    $ptAddress = trim($_POST['ptaddress']);

    // Query to fetch teacher's name based on selected class
        $teacher_query = "SELECT Teacher_Name FROM teachers WHERE Class = '$stClass'";
        $teacher_result = $conn->query($teacher_query);

        if ($teacher_result->num_rows > 0) {
            $teacher_row = $teacher_result->fetch_assoc();
            $teacher_name = $teacher_row['Teacher_Name'];
        } else {
            $teacher_name = "No teacher found";
            // or you can throw an error or handle it in any other way you want
        }

    $errors = validateFormData($stName, $stDob, $stAddress, $stMedical, $stClass, $ptName, $ptPhone, $ptEmail, $ptAddress);
    if (empty($errors)) {
        $student_id = executeQueryStudent($conn, $stName, $stDob, $stAddress, $stMedical, $stClass, $teacher_name);
        if ($student_id) {
            if (executeQueryParents($conn, $student_id, $ptName, $ptPhone, $ptEmail, $ptAddress)) {
                echo "Data submitted successfully";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
    // Close connection
    $conn->close();
}
?>