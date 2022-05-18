    let formContainer = document.querySelector('.form-container')
    let formDelete = document.querySelector('.form-delete')

    document.querySelector(".form").addEventListener("click", e => {
        e.stopPropagation();
    })
    formContainer.addEventListener("click", e => {
        formContainer.style.display = "none"
        document.getElementById('tour-name').value = ''
        document.getElementById('destination').value = 'default'
        document.getElementById('days').value = ''
        document.getElementById('start-day').value = ''
    })

    document.querySelector('.content__user').onclick = function() {
        let menuUser = document.querySelector('.content__user--menu')
        let caretUp = document.querySelector('.content__user--up')
        let caretDown = document.querySelector('.content__user--down')

        menuUser.classList.toggle('active')
        if (menuUser.classList.contains('active')) {
            caretDown.style.display = 'none'
            caretUp.style.display = 'inline-block'
        }
        else {
            caretDown.style.display = 'inline-block'
            caretUp.style.display = 'none'
        }
    }
    document.querySelector('.add-btn').onclick = () => {
        formContainer.style.display = 'unset'
        document.querySelector('.btn-submit').innerText = 'Thêm'
    }
    document.querySelector('.btn-cancel').onclick = () => {
        formContainer.style.display = "none"
        document.getElementById('tour-name').value = ''
        document.getElementById('destination').value = 'default'
        document.getElementById('days').value = ''
        document.getElementById('start-day').value = ''
    }

    let updateBtns = document.querySelectorAll('.update-btn')
    updateBtns.forEach(updateBtn => updateBtn.onclick = () => {
        let row = updateBtn.closest('.table-row')

        formContainer.style.display = 'unset'
        document.querySelector('.btn-submit').innerText = 'Cập nhật'
        document.getElementById('tour-name').value = row.children[1].innerText
        document.getElementById('destination').value = row.children[2].innerText
        document.getElementById('days').value = row.children[3].innerText
        document.getElementById('start-day').value = row.children[4].innerText
    })

    document.querySelector('.form-delete__btn--no').onclick = () => formDelete.style.display = 'none'
    
    let deleteBtns = document.querySelectorAll('.delete-btn')
    deleteBtns.forEach(deleteBtn => deleteBtn.onclick = () => {
        formDelete.style.display = 'unset'
    })