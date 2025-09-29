<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ติดตามผล</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <h1>🔔 ติดตามผล</h1>
    <?php
    $result = $conn->query("SELECT * FROM farmers ORDER BY created_at DESC");
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo "<div class='card'>
          🌱 <strong>{$row['name']}</strong> ({$row['age']} ปี)<br>
          ที่อยู่: {$row['address']}<br>
          📞 {$row['phone']}<br>
          สถานะ: {$row['status']}
        </div>";
      }
    } else {
      echo "<p>ยังไม่มีข้อมูลเกษตรกร</p>";
    }
    ?>
  </div>

  <!-- Bottom Nav -->
  <div class="navbar">
    <a href="index.html">🏠<span>หน้าหลัก</span></a>
    <a href="add.php">➕<span>เพิ่ม</span></a>
    <a href="track.php" class="active">🔔<span>ติดตาม</span></a>
    <a href="profile.php">👤<span>โปรไฟล์</span></a>
  </div>
</body>
</html>
