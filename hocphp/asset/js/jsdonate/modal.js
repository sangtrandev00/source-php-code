function signup(e) {
  event.preventDefault();
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var user = {
    username: username,
    email: email,
    password: password,
  };
  var json = JSON.stringify(user);
  localStorage.setItem(username, json);
  alert("dang ky thanh cong");
}
function login(e) {
  event.preventDefault();
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var user = localStorage.getItem(username);
  var data = JSON.parse(user);
  if (!user) {
    alert("vui long nhap username password");
  } else if (
    username == data.username &&
    email == data.email &&
    password == data.password
  ) {
    window.location.href = "../dangkiduan/duan.html";
  } else {
    alert("dang nhap that bai");
  }
}

var login_modal = document.getElementsByClassName('login-modal')[0];
var btn_open_login = document.getElementsByClassName('btn-open-login')[0];
var btn_close_login = document.getElementsByClassName('btn-close-login')[0];
btn_open_login.addEventListener('click', function () {
  login_modal.style.display = 'flex'
  btn_close_login.addEventListener('click', function () {
    login_modal.style.display = 'none'
  })
})
var sign_up_modal = document.getElementsByClassName('sign-up-modal')[0];
var btn_open_sign_up = document.getElementsByClassName('btn-open-sign-up')[0];
var btn_close_sign_up = document.getElementsByClassName('btn-close-sign-up')[0];
btn_open_sign_up.addEventListener('click', function () {
  sign_up_modal.style.display = 'flex'
  login_modal.style.display = 'none'
  btn_close_sign_up.addEventListener('click', function () {
    sign_up_modal.style.display = 'none'
  })
})
var btn_open_login1 = document.getElementsByClassName('btn-open-login-1')[0];
btn_open_login1.addEventListener('click', function () {
  login_modal.style.display = 'flex'
  sign_up_modal.style.display = 'none'
})
