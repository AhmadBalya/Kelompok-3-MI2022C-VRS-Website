// Ambil elemen tombol dengan kelas "btnn"
const btn = document.querySelector('.btnn');

// Tambahkan event listener untuk menghandle saat tombol di-hover
btn.addEventListener('mouseover', () => {
  // Saat mouse di-hover, ubah warna latar belakang dan ukuran teks
  btn.style.backgroundColor = '#fff';
  btn.style.color = '#ff7200';
  btn.style.transform = 'scale(1.05)';
});

// Tambahkan event listener untuk menghandle saat mouse meninggalkan tombol
btn.addEventListener('mouseout', () => {
  // Kembalikan ke gaya awal saat mouse meninggalkan tombol
  btn.style.backgroundColor = '#ff7200';
  btn.style.color = '#fff';
  btn.style.transform = 'scale(1)';
});

// Ketika dokumen HTML selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    // Pilih elemen-elemen yang memiliki class "fade-in"
    const elementsToAnimate = document.querySelectorAll(".fade-in");

    // Tambahkan class "fade-in" ke elemen-elemen yang ingin Anda animasikan
    elementsToAnimate.forEach((element) => {
        element.classList.add("fade-in");
    });
});
