


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- external stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container-fluid px-5 py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-5 fw-bold">STUDENT REGISTRATION</h1>
                <p class="lead">Please fill in all required fields</p>
            </div>
        </div>

        <form action="admin/actions.php" method="post" novalidate>
            <!-- Student Information Section -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-user me-2"></i>STUDENT INFORMATION
                </h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="StudentName" class="form-label">Name *</label>
                        <input type="text" class="form-control form-control-lg" name="stname" id="StudentName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="StudentDOB" class="form-label">DOB *</label>
                        <input type="date" class="form-control form-control-lg" name="stdob" id="StudentDOB" required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address *</label>
                        <input type="text" class="form-control form-control-lg" name="staddress" id="address" required>
                    </div>


                    <div class="col-md-6">
                        <label for="medicalInfo" class="form-label">Medical Information *</label>
                        <select class="form-select form-select-lg" name="stmedical" id="medicalInfo" required>
                            <option value="">Select medical condition</option>
                            <option value="none">None</option>
                            <option value="asthma">Asthma</option>
                            <option value="allergies">Allergies</option>
                            <option value="diabetes">Diabetes</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="class" class="form-label">Class *</label>
                        <select class="form-select form-select-lg" name="stclass" id="class" required>
                            <option value="">Select class</option>
                            <option value="Reception">Reception Year</option>
                            <option value="one">Year one</option>
                            <option value="two">Year two</option>
                            <option value="three">Year three</option>
                            <option value="four">Year four</option>
                            <option value="five">Year five</option>
                            <option value="six">Year six</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Parent Information Section -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-users me-2"></i>PARENT/GUARDIAN INFORMATION
                </h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="parent1Name" class="form-label">Parent/Guardian 1 Name *</label>
                        <input type="text" class="form-control form-control-lg" name="ptname" id="parent1Name" required>
                    </div>

                    <div class="col-md-6">
                        <label for="parent1Phone" class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control form-control-lg" name="ptphone" id="parent1Phone" required>
                    </div>

                    <div class="col-md-6">
                        <label for="parent1Email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control form-control-lg" name="ptemail" id="parent1Email" placeholder="name@example.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="parent1Address" class="form-label">Address *</label>
                        <input type="text" class="form-control form-control-lg" name="ptaddress" id="parent1Address" required>
                    </div>

                    
                </div>
            </div>

            <!-- Form Submission -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                <button type="reset" class="btn btn-outline-dark btn-lg px-4 me-md-2">
                    <i class="fas fa-eraser me-2"></i>Reset
                </button>
                <button type="submit" class="btn btn-submit btn-lg px-4">
                    <i class="fas fa-save me-2"></i>Submit
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>