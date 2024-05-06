<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lost And Found </title>
    <link rel="stylesheet" href="css/nmu.css">
    <style>
        /* CSS for the background photo */
        body {
            background-image: url('css/images/background.jpg'); /* Replace 'path_to_your_background_photo.jpg' with the actual path to your background photo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="nmuarabic">Arabic</a></li>
        </ul>
    </nav>
    <header>
        <img src="css/images/new mansoura.jpg" alt="Placeholder Image">
    </header>

    <h2><b>Deposit Form</b></h2>
    <form id="registrationForm" enctype="multipart/form-data" action="{{ route('form') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" pattern="[A-Za-z ]+" title="Please enter only letters" required>

        <label for="faculty">Faculty:</label>
        <select id="faculty" name="faculty" required>
            <option value="" disabled selected>Select your faculty</option>
            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
            <option value="Engineering">Engineering</option>
            <option value="Science">Science</option>
            <option value="International Legal Transactions">International Legal Transactions</option>
            <option value="Textile Science & Engineering ">Textile Science & Engineering </option>
            <option value="Dentistry">Dentistry</option>
            <option value="Doctor Of Pharmacy (PharmD) ">Doctor Of Pharmacy (PharmD) </option>
            <option value="Business">Business</option>
            <option value="Medicine & Surgery">Medicine & Surgery</option>
        </select>

        <label for="studentId">Student ID:</label>
        <input type="text" id="studentId" name="student_id" pattern="\d{9}" title="Please enter 9 numbers" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phone_number" pattern="\d{11}" title="Please enter 11 numbers"
            required>

        <label for="picture">Deposited Item:</label>
        <input type="file" id="picture" name="deposited_item" >

        <input type="submit" value="Submit">
    </form>
    <a href="/" style="position: fixed; top: 20px; right: 20px; color:#93191f">Sign Out</a>

    {{-- <div id="passwordBox" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closePasswordBox()">&times;</span>
            <label for="password">Enter Password:</label>
            <input type="password" id="password" name="password" required>
            <button id="submitPassword" onclick="checkPassword()">Submit</button>
        </div>
    </div>

    <div id="studentList">
        <input type="text" id="searchBar" oninput="searchStudents()" placeholder="Search by name or ID">
        <select id="collegeFilter" onchange="filterStudents()">
            <option value="all">All</option>
            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
            <option value="Engineering">Engineering</option>
            <option value="Science">Science</option>
            <option value="International Legal Transactions">International Legal Transactions</option>
            <option value="Textile Science & Engineering ">Textile Science & Engineering </option>
            <option value="Dentistry">Dentistry</option>
            <option value="Doctor Of Pharmacy (PharmD) ">Doctor Of Pharmacy (PharmD) </option>
            <option value="Business">Business</option>
            <option value="Medicine & Surgery">Medicine & Surgery</option>
        </select>
        <table>
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Student Name</th>
                    <th>Student ID</th>
                    <th>Phone Number</th>
                    <th>Faculty</th>
                    <th>Picture of the Bag</th>
                    <th>Time & Date</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id="studentTableBody"></tbody>
        </table>
    </div>
    <div id="fullscreenImage" onclick="closeFullscreen()">
        <div id="fullscreenContent">
            <img id="fullscreenImg" src="" alt="Fullscreen Image">
        </div>
    </div> --}}

    {{-- <script src="js/nmu.js"></script> --}}
</body>

</html>
