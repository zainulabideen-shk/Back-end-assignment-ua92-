<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrapper">
        <!-- Sidebar -->
       <?php include'sidebar.php'; ?>
        <!-- Page Content -->
        <div id="content">
            <!-- Page Content Area -->
            <div class="container-fluid py-4">
                <!-- Students Page (Default) -->
                <div id="students-page" class="page-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Classes</h2>
</div>
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
           <form> 
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Class Name</th>
                        <th>Capacity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // Configuration
                    $dbHost = 'localhost';
                    $dbUsername = 'root';
                    $dbPassword = '';
                    $dbName = 'students';

                    // Create connection
                    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error); } 
                         $query = "SELECT ID, Class_Name, Capacity FROM classes"; 
                        $result = $conn->query($query); 
                        //  to delete
                        if (isset($_GET['delete_id'])) {
                            $delete_id = $_GET['delete_id'];
                            $delete_query = "DELETE FROM classes WHERE ID = ?";
                            $stmt = $conn->prepare($delete_query);
                            $stmt->bind_param("i", $delete_id);
                            if ($stmt->execute() === TRUE) {
                                echo "<script>alert('Record deleted successfully'); window.location.href='class.php';</script>";
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                        // to print rows with data
                        if ($result->num_rows > 0) 
                        { while  
                                ($row = $result->fetch_assoc()) { echo "
                            <tr>
                            "; echo "
                            <td>" . $row['ID'] . "</td>
                            "; echo "
                            <td>" . $row['Class_Name'] . "</td>
                            "; echo "
                            <td>" . $row['Capacity'] . "</td>
                            "; 
                            echo "<td>";
                            echo "<a href='class.php?delete_id=" . $row['ID'] . "' class='btn btn-sm btn-danger'><i class='fas fa-trash'></i></a>";
                            echo "</td>";
                                
                                echo "</tr>"; 
                            } } 
                   
                    $conn->close(); 
                ?>
                
                     
                </tbody>
            </table>
            </form>
        </div>
    </div>
 </div>
</body>
</html>