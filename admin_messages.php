<?php
$conn = new mysqli("localhost", "root", "", "personal_website");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin | Contact Messages</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #0d47a1;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background: #0d47a1;
      color: white;
    }
    tr:hover {
      background: #f1f1f1;
    }
  </style>
</head>
<body>

<h1>Contact Messages</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date</th>
  </tr>

  <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['message']) ?></td>
      <td><?= $row['created_at'] ?></td>
    </tr>
  <?php } ?>

</table>

</body>
</html>

<?php $conn->close(); ?>
