-- ตารางเกษตรกร
CREATE TABLE IF NOT EXISTS farmers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT NOT NULL,
  address VARCHAR(255),
  phone VARCHAR(20),
  status VARCHAR(100) DEFAULT 'กำลังเพาะปลูก',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ตารางผู้ใช้
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  email VARCHAR(100),
  phone VARCHAR(20),
  profile_pic VARCHAR(255) DEFAULT 'user.png'
);

-- ใส่ข้อมูลทดสอบใน users
INSERT INTO users (username, email, phone, profile_pic) VALUES
('farmer_admin', 'admin@example.com', '0812345678', 'user.png')
ON DUPLICATE KEY UPDATE username=username;
