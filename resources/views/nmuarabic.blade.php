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
            <li><a href="nmu">English</a></li>
        </ul>
    </nav>
    <header>
        <img src="css/images/new mansoura.jpg" alt="Placeholder Image">
    </header>

    <h2>نموذج الإيداع</h2>
    <form id="registrationForm" enctype="multipart/form-data" action="{{ route('form_ar') }}" method="POST">
       @csrf
        <label for="name">:أسم الطالب</label>
        <input type="text" id="name" name="name" pattern="[A-Za-z ]+" title="Please enter only letters" required>

        <label for="faculty">:كلية</label>
        <select id="faculty" name="faculty" required>
            <option value="" disabled selected>اختر كليتك</option>
            <option value="Computer Science & Engineering">هندسة الحاسوب والبرمجيات</option>
            <option value="Engineering">الهندسة</option>
            <option value="Science">العلوم</option>
            <option value="International Legal Transactions">المعاملات القانونية الدولية</option>
            <option value="Textile Science & Engineering ">علوم وهندسة النسيج</option>
            <option value="Dentistry">طب الأسنان</option>
            <option value="Doctor Of Pharmacy (PharmD) ">الصيدلة</option>
            <option value="Business">إدارة الأعمال</option>
            <option value="Medicine & Surgery">الطب والجراحة</option>           
        </select>

        <label for="studentId">:هوية الطالب</label>
        <input type="text" id="studentId" name="student_id" pattern="\d{9}" title="Please enter 9 numbers" required>

        <label for="phoneNumber">:رقم التليفون</label>
        <input type="text" id="phoneNumber" name="phone_number" pattern="\d{11}" title="Please enter 11 numbers"
            required>

        <label for="picture">:العنصر المخزن</label>
        <input type="file" id="picture" name="deposited_item" accept="image/png, image/jpeg, image/jpg" required>

        <input type="submit" value="Submit">
    </form>
    <a href="/" style="position: fixed; top: 20px; right: 20px; color:#93191f">تسجيل الخروج</a>

    {{-- <button id="toggleButton" onclick="showPasswordBox()">إظهار قائمة الطلاب</button>

    <div id="passwordBox" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closePasswordBox()">&times;</span>
            <label for="password">:أدخل كلمة المرور</label>
            <input type="password" id="password" name="password" required>
            <button id="submitPassword" onclick="checkPassword()">:يُقدِّم</button>
        </div>
    </div>

    <div id="studentList">
        <input type="text" id="searchBar" oninput="searchStudents()" placeholder="Search by name or ID">
        <select id="collegeFilter" onchange="filterStudents()">
            <option value="all">الجميع</option>
            <option value="Computer Science & Engineering">هندسة الحاسوب والبرمجيات</option>
            <option value="Engineering">الهندسة</option>
            <option value="Science">العلوم</option>
            <option value="International Legal Transactions">المعاملات القانونية الدولية</option>
            <option value="Textile Science & Engineering ">علوم وهندسة النسيج</option>
            <option value="Dentistry">طب الأسنان</option>
            <option value="Doctor Of Pharmacy (PharmD) ">دكتور في الصيدلة (الصيدلة السريرية)</option>
            <option value="Business">إدارة الأعمال</option>
            <option value="Medicine & Surgery">الطب والجراحة</option>           
        </select>
        <table>
            <thead>
                <tr>
                    <th>التسلسل</th>
                    <th>اسم الطالب</th>
                    <th>رقم الطالب</th>     
                    <th>رقم الهاتف</th>
                    <th>الكلية</th>
                    <th>صورة الحقيبة</th>
                    <th>الوقت والتاريخ</th>
                    <th>حذف</th>
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
