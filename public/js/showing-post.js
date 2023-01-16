let usersIdentity = document.querySelectorAll(".fil .post .user-identity");

usersIdentity.forEach((userIdentity) => {
    userIdentity.addEventListener("click", (e) => {
        if (e.target.parentElement != userIdentity)
            return;
        
        window.location = "?page=user&userId=" + userIdentity.getAttribute("data-user-id");
    });
});