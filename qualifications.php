<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualifications | OLAGO STAFFING SOLUTION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
body {
    padding: 20px;
    font-family: Arial, sans-serif;
}

h1, h2, h3 {
    color: #333;
    margin-bottom: 20px;
}

ul {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 10px;
}

p {
    margin-bottom: 10px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

.section-container {
    margin-bottom: 40px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.section-container:hover {
    background-color: #e9ecef;
}

.apply-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.apply-button:hover {
    background-color: #0056b3;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    justify-content: space-between;
}

.header-container {
    margin-bottom: 40px;
}

.header {
    background-color: #007bff;
    padding: 20px;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.header:hover {
    background-color: #0056b3;
}

.header h1 {
    font-size: 32px;
    margin-top: 0;
    margin-bottom: 10px;
}

.header p {
    font-size: 18px;
    margin-bottom: 0;
}

.background-image-section {
    background-image: url(./images/banner3.jpg);
    background-size: cover;
    background-position: center;
    padding: 40px;
    border-radius: 5px;
    transition: background-image 0.3s ease;
}

.background-image-section:hover {
    background-image: url(./images/banner3.jpg);
}
</style>

</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to OLAGO STAFFING SOLUTION</h1>
            <p>Empowering companies with the right talent</p>
        </div>

        <div class="section-container">
            <h2>Qualifications</h2>
            <ul>
                <li>Bachelor's degree in Science or related field required</li>
                <li>Two-year acceptable training program required</li>
                <li>Computer skills and dexterity required for data entry and retrieval of information</li>
                <li>Effective verbal and written communication skills needed</li>
                <li>Proficiency with Windows-style applications and various software packages required</li>
                <li>Strong interpersonal skills required</li>
                <li>Analytical skills necessary for accurate and concise reporting</li>
                <li>Ability to manage stress and maintain a professional atmosphere needed</li>
                <li>Light work with physical demands in excess of Sedentary Work required</li>
                <li>Prolonged standing required</li>
            </ul>
        </div>

        <div class="section-container">
            <h2>WE'RE HIRING!</h2>
            <h3>Sample Job Description</h3>
            <ul>
                <li>Assists pathologists in all areas except consultation and reporting while maintaining patient confidentiality</li>
                <li>Performs specimen dissections and descriptions, coordinates gross room operations, and serves as a preceptor</li>
                <li>Coordinates new employee orientation, supports departmental goals and objectives, and performs related duties as required</li>
                <li>Adapts behavior to specific patient population and works with patients and specimens that could contain communicable diseases</li>
                <li>Essential duties must be performed satisfactorily in a patient care area where patients enter.</li>
            </ul>
            <p>This job assists Pathologists in surgical specimen examination, requires satisfactory performance of essential duties, and the description is a summary, subject to change at the company's discretion.</p>
            <p>This job description is not a comprehensive or all-inclusive listing of duties and responsibilities but a summary of the primary roles of the position. Contents are subject to change at the company's discretion.</p>
        </div>

        <div class="section-container">
            <h2>RESPONSIBILITIES</h2>
            <h3>DUTIES</h3>
            <ul>
                <li>Perform specimen dissections and gross descriptions</li>
                <li>Coordinate gross room operations</li>
                <li>Function as a preceptor</li>
                <li>Coordinate orientation of new employees</li>
                <li>Support departmental goals and objectives</li>
                <li>Adapt behavior to the specific patient population, including but not limited to: respect for privacy, method of introduction to the patient, adapting explanation of services or procedures to be performed, requesting permissions and communication style</li>
                <li>Other related duties as required</li>
                <li>Work directly with patients; and/or with specimens that could contain communicable diseases</li>
            </ul>
        </div>

        <div class="section-container background-image-section">
            <h2>Are You Ready to Make a Difference?</h2>
            <button class="apply-button" id="apply-today">Apply Today!</button>
        </div>
    </div>

    <div id="application-modal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Application Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include 'application.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("apply-today").addEventListener("click", function() {
            var modal = new bootstrap.Modal(document.getElementById("application-modal"));
            modal.show();
        });
    </script>
</body>
</html>

