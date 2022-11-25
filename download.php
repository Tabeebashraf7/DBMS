<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="join.css">
  <link rel="stylesheet" href="index.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
    <th>Lender id</th>
    <th>Subject id</th>
    <th>Donation</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="download.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
      <td><?php echo $file['lender_id']; ?></td>
      <td><?php echo $file['subject_id']; ?></td>
      <td><a href="registration-donation.html">Donation</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>