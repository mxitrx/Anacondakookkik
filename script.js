document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("farmerForm");
  const list = document.getElementById("farmerList");

  // โหลดข้อมูลตอนเปิดเว็บ
  loadFarmers();

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch("save_farmer.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.text())
    .then(data => {
      alert(data);
      form.reset();
      loadFarmers();
    });
  });

  function loadFarmers() {
    fetch("list_farmer.php")
      .then(res => res.json())
      .then(data => {
        list.innerHTML = "";
        data.forEach(farmer => {
          list.innerHTML += `
            <div class="card">
              <strong>${farmer.name}</strong> (${farmer.age} ปี)<br>
              📍 ${farmer.address}<br>
              📞 ${farmer.phone}
            </div>
          `;
        });
      });
  }
});
