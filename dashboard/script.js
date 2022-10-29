const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggle = document.querySelector(".theme-toggler");

// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// hide sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// change theme
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggle.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggle.querySelector('span:nth-child(2)').classList.toggle('active');
})

// fill table
List.forEach(list => {
    const tr = document.createElement('tr');
    const trContent = `
                    <td>${list.name}</td>
                    <td>${list.award}</td>
                    <td>${list.deadline}</td>
                    <td class="primary">Details</td>
                    `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})
//list table
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });

// Countries
document.addEventListener('DOMContentLoaded', () =>{
    const selectDrop = document.querySelector('#countries');
    fetch('https://restcountries.com/v3.1/all').then(res =>{
        return res.json();
    }).then(data => {
        let output = "";
     data.forEach(country =>{
        output += `<option>${country.name}</option>`;
     })
     selectDrop.innerHTML = output;
    }).catch(err => {
        console.log(err);
    })

});
// show password
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});