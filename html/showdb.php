

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
    include ("../dbdata/connectDb.php");
    $data = "SELECT * FROM register";
    $result = mysqli_query($con,$data);
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $db_data[] = $row;
    }

  }
    ?>

<h2>User Data</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php if (!empty($db_data)): ?>
        <?php foreach ($db_data as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td>
                  <button>Edit</button>
                  <button>Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">No data found</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>