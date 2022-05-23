
// handle control add, update, delete data

function handleControlData(...params) {

    let formContainer = document.querySelector('.form-container')
    let formDelete = document.querySelector('.form-delete')
    let updateBtns = document.querySelectorAll('.update-btn')
    let deleteBtns = document.querySelectorAll('.delete-btn')

    deleteBtns.forEach(deleteBtn => deleteBtn.onclick = () => {
        formDelete.style.display = 'unset'
    })

    document.querySelector('.form-delete__btn--no').onclick = () => formDelete.style.display = 'none'
    
    document.querySelector(".form").addEventListener("click", e => {
        e.stopPropagation();
    })

    formContainer.addEventListener("click", () => {
        formContainer.style.display = "none"
        params.forEach(param => {
            if (param.tagName == 'SELECT')
                param.value = 'default'
            else
                param.value = ''
        })
    })
    
    document.querySelector('.add-btn').onclick = () => {
        formContainer.style.display = 'unset'
        document.querySelector('.btn-submit').innerText = 'Thêm'
    }
    
    document.querySelector('.btn-cancel').onclick = () => {
        formContainer.style.display = "none"
        params.forEach(param => {
            if (param.tagName == 'SELECT')
                param.value = 'default'
            else
                param.value = ''
        })
    }
    
    updateBtns.forEach(updateBtn => updateBtn.onclick = () => {
        let row = updateBtn.closest('.table-row')
    
        formContainer.style.display = 'unset'
        document.querySelector('.btn-submit').innerText = 'Cập nhật'

        params.forEach((param, index) => {
            param.value = row.children[index + 1].innerText
        })
    })

}

// handle caret menu user

function handleUserCaretIcon() {

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

}

// change page
function handleChangePage() {

    let changePageBtns = document.querySelectorAll('.page-number')
    let prevPageBtn = document.querySelector('.page-prev')
    let nextPageBtn = document.querySelector('.page-next')
    
    function handlePageArrow() {
    
        let changePageBtn = document.querySelector('.page-number.active')
    
        if (changePageBtn.previousElementSibling.classList.contains('page-prev')) {
            prevPageBtn.disabled = true
        }
        else {
            prevPageBtn.disabled = false
        }
    
        if (changePageBtn.nextElementSibling.classList.contains('page-next')) {
            nextPageBtn.disabled = true
        }
        else {
            nextPageBtn.disabled = false
        }
    }
    
    prevPageBtn.onclick = () => {
        let isChange = false
        changePageBtns.forEach(changePageBtn => {
            if (changePageBtn.classList.contains('active') && !isChange) {
                changePageBtn.classList.remove('active')
                changePageBtn.previousElementSibling.classList.add('active')
                isChange = true
            }
            handlePageArrow()
        })
    }
    
    nextPageBtn.onclick = () => {
        let isChange = false
        changePageBtns.forEach(changePageBtn => {
            if (changePageBtn.classList.contains('active') && !isChange) {
                changePageBtn.classList.remove('active')
                changePageBtn.nextElementSibling.classList.add('active')
                isChange = true
            }
            handlePageArrow()
        })
    }
    
    changePageBtns.forEach(changePageBtn => {
        changePageBtn.onclick = () => {
            changePageBtns.forEach(changePageBtn => changePageBtn.classList.remove('active'))
            changePageBtn.classList.add('active')
            handlePageArrow()
        }
    })
    
}

export {handleControlData, handleUserCaretIcon, handleChangePage };