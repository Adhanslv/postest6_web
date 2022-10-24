// klk Icon Untuk Melihat Perubahannya
function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
   }   

// Dark Mode
// function myBackGround(){
//     let hitam = document.body;
//     hitam.classList.toggle("dark-mode")
// }
   
// Klik Halaman Untuk Mengubah Backgroundnya
document.addEventListener("click", function(){
document.body.style.backgroundColor = "rgb(46, 44, 44)";
document.body.style.color = "white";
});

// Masuk Halaman Untuk Mengubah Backgroundnya
document.addEventListener("mouseover", function(){
document.body.style.backgroundColor = "White";
document.body.style.color = "black  ";
});

// Keluar Halaman Untuk Mengubah Backgroundnya
document.addEventListener("mouseout", function(){
document.body.style.backgroundColor = "#128273";
document.body.style.color = "black";
});

