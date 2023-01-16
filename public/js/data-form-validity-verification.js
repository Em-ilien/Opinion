function checkUsernameRegisterByAjax(e) {
    e.preventDefault();

    if (document.querySelector(".register-error"))
        document.querySelector(".register-error").remove();

    let username = document.querySelector("input[name='username']");
    
    const data = new FormData();
    data.append('username', username.value);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'src/ajax/register_username.php', true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.href = 'index.php?page=register/4';
            return;
        }

        let error = document.createElement("p");
        error.classList.add("register-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector("form div").insertBefore(error, document.querySelector(".validation-button"));
        }, 100);

    }
    xhr.send(data);
}

function checkEmailAndPasswordRegisterByAjax(e) {
    e.preventDefault();

    if (document.querySelector(".register-error"))
        document.querySelector(".register-error").remove();

    let email = document.querySelector("input[name='email']");
    let password = document.querySelector("input[name='password']");
    
    const data = new FormData();
    data.append('email', email.value);
    data.append('password', password.value);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'src/ajax/register_email_and_password.php', true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.href = 'index.php?page=register/5';
            return;
        }

        let error = document.createElement("p");
        error.classList.add("register-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector("form div").insertBefore(error, document.querySelector(".validation-button"));
        }, 100);

    }
    xhr.send(data);
}

function checkNicknameRegisterByAjax(e) {
    e.preventDefault();

    if (document.querySelector(".register-error"))
        document.querySelector(".register-error").remove();
    
    let nickname = document.querySelector("input[name='nickname']");

    const data = new FormData();
    data.append('nickname', nickname.value);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'src/ajax/register_nickname.php', true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.href = 'index.php?page=register/3';
            return;
        }

        let error = document.createElement("p");
        error.classList.add("register-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector("form div").insertBefore(error, document.querySelector(".validation-button"));
        }, 100);

    }
    xhr.send(data);
}

function checkBirthdayRegisterByAjax(e) {
    e.preventDefault();

    if (document.querySelector(".register-error"))
        document.querySelector(".register-error").remove();
    
    let birthday = document.querySelector("input[name='birthday']");
    
    const data = new FormData();
    data.append('birthday', birthday.value);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'src/ajax/register_birthday.php', true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.href = 'index.php?page=register/6';
            return;
        }

        let error = document.createElement("p");
        error.classList.add("register-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector("form div").insertBefore(error, document.querySelector(".validation-button"));
        }, 100);
    }
    xhr.send(data);
}

function checkAssentRegisterByAjax(e) {
    e.preventDefault();

    if (document.querySelector(".register-error"))
        document.querySelector(".register-error").remove();

    let checkbox1 = document.querySelector("input[name='checkbox1']");
    let checkbox2 = document.querySelector("input[name='checkbox2']");

    const data = new FormData();
    data.append('checkbox1', checkbox1.checked);
    data.append('checkbox2', checkbox2.checked);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'src/ajax/register_assent.php', true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.href = 'index.php?page=register/9';
            return;
        }

        let error = document.createElement("p");
        error.classList.add("register-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector("form div").insertBefore(error, document.querySelector(".validation-button"));
        }, 100);
    }
    xhr.send(data);
}