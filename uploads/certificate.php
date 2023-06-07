<!DOCTYPE html>
<html>
<head>
    <title>Upload Certificates</title>
</head>
<body>
    <?php
    require_once("../DBConnection.php");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Check if applicant ID is provided in the URL
    if (isset($_GET['id'])) {
        $applicantId = $_GET['id'];
        $qry = $conn->query("SELECT a.*,d.name as dept,dd.name as desg FROM `applicant_list` a inner join vacancy_list v on a.vacancy_id = v.vacancy_id inner join `designation_list` dd on v.designation_id = dd.designation_id inner join `department_list` d on dd.department_id = d.department_id where a.applicant_id = '{$applicantId}'");
        $applicantData = $qry->fetchArray();
        foreach ($applicantData as $k => $v) {
            $$k = $v;
        }
        $message = str_replace(array("\n\r", "\n"), "<br/>", $message);
        $summary = str_replace(array("\n\r", "\n"), "<br/>", $summary);
    }

    // Set maximum file size and post size for uploads
    ini_set('upload_max_filesize', '32M');
    ini_set('post_max_size', '32M');

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the certificate file field is set
        if (isset($_FILES['certificate'])) {
            // Define the target directory to store the certificates
            $targetDir = __DIR__ . '/uploads/';

            // Iterate through each uploaded certificate file
            foreach ($_FILES['certificate']['tmp_name'] as $key => $tmpName) {
                // Get the filename and temporary path of the certificate
                $filename = $_FILES['certificate']['name'][$key];
                $tmpPath = $_FILES['certificate']['tmp_name'][$key];

                // Generate a unique filename for the certificate
                $uniqueFilename = uniqid() . '_' . $filename;
                $targetPath = $targetDir . $uniqueFilename;

                // Move the uploaded file to the target directory
                if (move_uploaded_file($tmpPath, $targetPath)) {
                    // File upload success
                    // TODO: Save the filename or the target path to the database
                    $conn->insertCertificate($applicantId, $schoolName, $schoolAddress, $level, $from, $to, $targetPath);
                    echo "Certificate uploaded successfully!";
                } else {
                    // File upload failed
                    echo "Failed to upload the certificate.";
                }
            }
        } else {
            echo "No certificate file found.";
        }
    }
    ?>

    <h1>Upload Certificates</h1>

    <?php
    // Display applicant information
    if (isset($applicantData)) {
        echo "<h2>Applicant Information</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Department: $dept</p>";
        echo "<p>Designation: $desg</p>";
    }
    ?>

    <h2>Upload Certificates</h2>

    <form method="POST" enctype="multipart/form-data">
        <label for="certificate">Select Certificates:</label>
        <input type="file" name="certificate[]" multiple><br><br>
        <input type="submit" value="Upload">
    </form>

</body>
</html>
