<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เพิ่มข้อมูลเกษตรกร</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <h1>➕ เพิ่มข้อมูลเกษตรกร</h1>
    <form action="save_farmer.php" method="POST">
      <label>ชื่อเกษตรกร:</label>
      <input type="text" name="name" required>

      <label>อายุ:</label>
      <input type="number" name="age" required>

      <label>ที่อยู่:</label>
      <input type="text" name="address" required>

      <label>เบอร์โทร:</label>
      <input type="text" name="phone" required>

      <button type="submit">บันทึกข้อมูล</button>
    </form>
  </div>

  <!-- Bottom Nav -->
  <div class="navbar">
    <a href="index.html">🏠<span>หน้าหลัก</span></a>
    <a href="add.php" class="active">➕<span>เพิ่ม</span></a>
    <a href="track.php">🔔<span>ติดตาม</span></a>
    <a href="profile.php">👤<span>โปรไฟล์</span></a>
  </div>
</body>
</html>
