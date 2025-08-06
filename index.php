<!DOCTYPE html>
<html>
<head>
    <title>User Status Form</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>

<h2>Add User</h2>
<form method="POST" action="insert.php">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <input type="submit" value="Submit">
</form>

<br><br>

<h2>User Table</h2>
<table>
    <tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>

    <?php
    $conn = new mysqli("localhost", "root", "", "info");
    $result = $conn->query("SELECT * FROM user");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td id='status-{$row['id']}'>{$row['status']}</td>
            <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
        </tr>";
    }

    $conn->close();
    ?>

</table>

<script>
function toggleStatus(id) {
    fetch(`toggle.php?id=${id}`)
    .then(response => response.text())
    .then(data => {
        document.getElementById(`status-${id}`).innerText = data;
    });
}
</script>

</body>
</html>
