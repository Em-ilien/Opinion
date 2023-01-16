let loginForm = document.querySelector(".login-form");

loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    if (document.querySelector(".login-error"))
        document.querySelector(".login-error").remove();

    let email = loginForm.querySelector("input[name='email']").value;
    let password = loginForm.querySelector("input[name='password']").value;

    const data = new FormData();
    data.append("identifier", email);
    data.append("password", password);

    let xhr = new XMLHttpRequest();
    xhr.responseType = "json";
    xhr.open("POST", "src/ajax/check_login_credentials.php", true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            window.location.href = "index.php";
        } else {
            let error = document.createElement("p");
            error.classList.add("login-error");
            error.innerHTML = xhr.response.error;

            setTimeout(() => {
                loginForm.querySelector("div").insertBefore(error, document.querySelector(".validation-button"));
            }, 100);
        }
    };
    xhr.send(data);
});