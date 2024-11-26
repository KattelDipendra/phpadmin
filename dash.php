<!-- <?php
session_start();

// Example: Set the logged-in username (Replace this with your login logic)
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Admin"; // Set a dummy username for testing
}

$username = $_SESSION['username'];
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
            padding: 15px;
            background-color: #007bff;
            margin: 0;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 15px;
            cursor: pointer;
            border-bottom: 1px solid #444;
        }
        .sidebar ul li:hover {
            background-color: #495057;
        }
        .sidebar ul li .dropdown {
            display: none;
            background-color: #444;
            margin-left: 15px;
        }
        .sidebar ul li.active .dropdown {
            display: block;
        }
        .sidebar ul li .dropdown li {
            padding: 10px;
            cursor: pointer;
        }
        .sidebar ul li .dropdown li:hover {
            background-color: #555;
        }
        /* Main content styling */
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
        }
        iframe {
            width: 100%;
            height: 80vh;
            border: none;
        }
    </style>
    <script>
        function loadPage(page) {
            document.getElementById('iframe').src = page;
        }
    </script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>User Management</h2>
        <ul>
            <li onclick="this.classList.toggle('active')">
                User Management
                <ul class="dropdown">
                    <li onclick="loadPage('adduser.php')">Add User</li>
                    <li onclick="loadPage('listuser.php')">List Users</li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="header">
            <h1>Dashboard</h1>
            <!-- <span>Welcome, <?php echo htmlspecialchars($username); ?></span> -->
        </div>

        <!-- Content Area -->
        <iframe id="iframe" src=""></iframe>
    </div>
</body>
</html>
