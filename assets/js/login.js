// transform login-register
let container = document.querySelector('.container')
let transformBtns = document.querySelectorAll('.form-heading__item')

transformBtns.forEach(btn => {
    btn.onclick = () => {
        transformBtns.forEach(btn => btn.classList.remove('active'))
        btn.classList.add('active')
        if (btn.innerText === "Đăng nhập") {   
            container.classList.add('login')
            container.classList.remove('register')
        }
        else {
            container.classList.remove('login')
            container.classList.add('register')
        }
    }
})
// display-hidden password
let inputPass = document.querySelector('.form-login .form-input[name="password"]')
let hiddenPass = document.querySelector('img[name="eye"]')
let displayPass = document.querySelector('img[name="eye-slash"]')

hiddenPass.onclick = () => {
    hiddenPass.classList.remove('active')
    displayPass.classList.add('active')
    inputPass.type = 'text'
}
displayPass.onclick = () => {
    displayPass.classList.remove('active')
    hiddenPass.classList.add('active')
    inputPass.type = 'password'
}
// control data

let fullName = document.querySelector('.form-input[name="fullname"]')
let email = document.querySelector('.form-input[name="email"]')
let phone = document.querySelector('.form-input[name="phone"]')
let password = document.querySelector('.form-input[name="create-password"]')

fullName.onblur = function() {
    let regex = /^[\p{L} .'-]+$/u
    
    if (this.value == '') {
        this.nextElementSibling.innerText = 'Vui lòng điền trường này'
        this.style.borderColor = '#f33a58'
    }
    else if (!regex.test(this.value)) {
        this.nextElementSibling.innerText = 'Họ và tên chỉ chứa chữ cái'
        this.style.borderColor = '#f33a58'
    }
    else {
        this.nextElementSibling.innerText = ''
        this.style.borderColor = '#ccc'
    }
}
email.onblur = function() {
    let regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    
    if (this.value == '') {
        this.nextElementSibling.innerText = 'Vui lòng điền trường này'
        this.style.borderColor = '#f33a58'
    }
    else if (!regex.test(this.value)) {
        this.nextElementSibling.innerText = 'Vui lòng nhập vào một email'
        this.style.borderColor = '#f33a58'
    }
    else {
        this.nextElementSibling.innerText = ''
        this.style.borderColor = '#ccc'
    }
}
phone.onblur = function() {
    let regex = /^\+?\d{1,3}?[- ]?\(?(?:\d{2,3})\)?[- ]?\d\d\d[- ]?\d\d\d\d$/
    
    if (this.value == '') {
        this.nextElementSibling.innerText = 'Vui lòng điền trường này'
        this.style.borderColor = '#f33a58'
    }
    else if (!regex.test(this.value)) {
        this.nextElementSibling.innerText = 'Vui lòng nhập theo định dạng ???(-.)???(-.)????'
        this.style.borderColor = '#f33a58'
    }
    else {
        this.nextElementSibling.innerText = ''
        this.style.borderColor = '#ccc'
    }
}
password.onblur = function() {
    let regex = /^(?=.*[a-z])(?=.*[@$!%*#?&])(?=.*[0-9])[A-Za-z0-9@$!%*#?&]{8,}$/
    
    if (this.value == '') {
        this.nextElementSibling.innerText = 'Vui lòng điền trường này'
        this.style.borderColor = '#f33a58'
    }
    else if (!regex.test(this.value)) {
        this.nextElementSibling.innerText = 'Mật khẩu tối thiểu 8 ký tự bao gồm chữ cái, chữ số và ký tự đặc biệt'
        this.style.borderColor = '#f33a58'
    }
    else {
        this.nextElementSibling.innerText = ''
        this.style.borderColor = '#ccc'
    }
}

const btnRegister = document.querySelector('.form-btn[name="register"]')
btnRegister.onclick = function(e) {
    let check = true
    if (fullName.value == '') {
        fullName.nextElementSibling.innerText = 'Vui lòng điền trường này'
        fullName.style.borderColor = '#f33a58'
        check = false
    }
    if (email.value == '') {
        email.nextElementSibling.innerText = 'Vui lòng điền trường này'
        email.style.borderColor = '#f33a58'
        check = false
    }
    if (phone.value == '') {
        phone.nextElementSibling.innerText = 'Vui lòng điền trường này'
        phone.style.borderColor = '#f33a58'
        check = false
    }
    if (password.value == '') {
        password.nextElementSibling.innerText = 'Vui lòng điền trường này'
        password.style.borderColor = '#f33a58'
        check = false
    }
    if (!check)
        e.preventDefault();
    else
        window.location.assign(window.location.pathname)
}