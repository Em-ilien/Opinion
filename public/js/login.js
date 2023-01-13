let loginForm = document.querySelector(".login-form");

loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

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
            window.location.href = ".";
        } else {
            document.querySelector(".error-message").innerHTML = xhr.response.message;
        }
    };
    xhr.send(data);
});