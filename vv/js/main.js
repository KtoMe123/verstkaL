let button = document.querySelector(".form-right__button .main-button")
button.addEventListener('click', funk)

let form, mail, tel, name, comment; 
form = document.querySelector(".form-right__main form")
function funk() {
    mail = form.querySelector('#mail').value
    tel = form.querySelector('#tel').value
    name = form.querySelector('#name').value
    comment = form.querySelector('#comment').value
    if((mail) == '' || (mail) == null || (mail) == undefined) {
        mail = "empty"
    }
    alert(mail)
    alert(tel)
    alert(name)
    alert(comment)
    

}