// script.js

// ใส่ URL ของ Google Apps Script ที่คัดลอกมาตรงนี้
const scriptURL = 'https://script.google.com/macros/s/AKfycbxSTGUWJ5RNfhbbsmjlrrjxAB7hfMSoMuwZkwd1j5pCOxBvfEPceXBpzZCZtEwulZwj/exec'; 
const form = document.getElementById('farmerForm');

form.addEventListener('submit', e => {
  e.preventDefault(); // ป้องกันไม่ให้ฟอร์มรีเฟรชหน้า
  
  const submitButton = form.querySelector('button[type="submit"]');
  const originalButtonText = submitButton.textContent;
  submitButton.disabled = true;
  submitButton.textContent = 'กำลังบันทึก...';

  const formData = new FormData(form);

  fetch(scriptURL, { method: 'POST', body: formData })
    .then(response => response.json())
    .then(data => {
      console.log('Success!', data);
      alert('บันทึกข้อมูลสำเร็จ!');
      form.reset(); // ล้างข้อมูลในฟอร์ม
    })
    .catch(error => {
      console.error('Error!', error.message);
      alert('เกิดข้อผิดพลาด! ไม่สามารถบันทึกข้อมูลได้');
    })
    .finally(() => {
      // คืนค่าปุ่มให้กลับมาเป็นปกติ
      submitButton.disabled = false;
      submitButton.textContent = originalButtonText;
    });
});