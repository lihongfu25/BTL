function Header() {
    document.querySelector('.header__login--btn').onclick = function() {
        window.location.assign('login.html')
    }
    document.querySelector('.header__user').onclick = function() {
        document.querySelector('.header__user--menu').classList.toggle('active')
    }
}
export default Header;