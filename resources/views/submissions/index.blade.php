<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Items</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        body {
            background-image: url('{{ asset('css/images/admin.jpg') }}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative; /* Set body to relative position */
        }
        .sign-out-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #8a0505;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th:first-child,
        td:first-child {
            text-align: center;
        }
        th:last-child,
        td:last-child {
            text-align: center;
        }
        td:last-child button {
            background-color: #8a0505;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            font-size: 16px; /* Adjust font size */
            border-radius: 5px; /* Round corners */
            transition: background-color 0.3s; /* Smooth color transition */
        }
        td:last-child button:hover {
            background-color: #6b0303;
        }
        /* Style for search filter */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
        }
        input[type="text"],
        button[type="submit"],
        button[type="button"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth color transition */
        }
        input[type="text"] {
            width: 300px;
            margin-right: 10px;
        }
        button[type="submit"],
        button[type="button"] {
            cursor: pointer;
            font-weight: bold; /* Make text bold */
            color: #000000; /* Text color */
        }
        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #861212; /* Change background color on hover */
        }
    </style>
</head>
<body>
    <a href="/" class="sign-out-btn">Sign Out</a>
    <h1>Submitted Items</h1>

    <div class="search-container">
        <!-- Search form -->
        <form action="{{ route('submission.search') }}" method="GET">
            <input type="text" name="query" placeholder="Search by ID or Name">
            <button type="submit">Search</button>
        </form>
        <!-- Undo button -->
        <button type="button" onclick="window.location.href='{{ route('submission.search') }}'">Back</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th> <!-- Add row number column -->
                <th>Name</th>
                <th>Faculty</th>
                <th>Student ID</th>
                <th>Phone Number</th>
                <th>Deposited Item</th>
                <th>Delete</th> <!-- Add column for delete buttons -->
            </tr>
        </thead>
        <tbody>
            @php $row_number = 1; @endphp <!-- Initialize row number -->
            @foreach ($submissions as $submission)
            <tr>
                <td>{{ $row_number++ }}</td> <!-- Increment row number -->
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->faculty }}</td>
                <td>{{ $submission->student_id }}</td>
                <td>{{ $submission->phone_number }}</td>
                <td><img src="{{ url('images/'.$submission->deposited_item) }}" style="width: 100px; hight: 100px"></td>
                <td>
                    <!-- Delete form -->
                    <form action="{{ route('submission.destroy', $submission->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
