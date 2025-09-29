<?php
include "config.php";
$user = $conn->query("SELECT * FROM users LIMIT 1")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>โปรไฟล์</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container" style="text-align:center;">
    <h2>โปรไฟล์</h2>
    <img src="<?php echo $user['profile_pic']; ?>" width="120" style="border-radius:50%; margin:10px 0;">
    <p><strong>👤 Username:</strong> <?php echo $user['username']; ?></p>
    <p><strong>📧 Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>📞 Phone:</strong> <?php echo $user['phone']; ?></p>
  </div>

  <!-- Bottom Nav -->
  <div class="navbar">
    <a href="index.html">🏠<span>หน้าหลัก</span></a>
    <a href="add.php">➕<span>เพิ่ม</span></a>
    <a href="track.php">🔔<span>ติดตาม</span></a>
    <a href="profile.php" class="active">👤<span>โปรไฟล์</span></a>
  </div>
</body>
</html>
