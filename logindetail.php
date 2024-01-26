<!DOCTYPE html>
<html lang="en">
    <?php
    include 'connection.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #3e75cf;
    color: #fff;
    text-align: center;
    padding: 10px;
}

nav {
    background-color: #444;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

main {
    margin: 20px;
}

.profile-section {
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #49a2e6;
}

footer {
    background-color: #0000;
    color: #fff;
    text-align: center;
    padding: 10px;
}

    </style>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.html">records</a></li>
            <li><a href="package.html">Packages</a></li>
        </ul>
    </nav>
    <main>
        <section class="profile-section">
            <h2>My Profile</h2>
            <p>Admin: Tomtony</p>
        
            <p>Email ID: tomtony@gmail.com</p>  
        </section>
    </main>
    <footer>
        &copy;
    </footer>
<?php
$sql="select * from login";
$result = $connect->query($sql);
if($result->num_rows > 0)
{
    ?>
<table border="1">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
            echo '<tr>';
            echo '<td>';
            echo $row["name"];
            echo '</td>';
            echo '<td>';
            echo $row["email"];
            echo '</td>';
            echo '<td>';
            echo $row["password"];
            echo '</td>';
            echo '</tr>';
        } 
    }
    ?>
    </table>
</body>
</html>