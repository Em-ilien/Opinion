let usersIdentity = document.querySelectorAll(".fil .post .user-identity");

function redirectToUserPageOnClick(e, userIdentity) {
    if (e.target.parentElement != userIdentity)
        return;
    
    window.location = "index.php?page=user&userId=" + userIdentity.getAttribute("data-user-id");
}
    
let shownPosts = [];

function fetchTheTenNextPost() {
    let userProfil = document.querySelector(".user-profil");

    let userId = null;
    let sortByMostCommented = null;

    if (userProfil) {
        userId = userProfil ? userProfil.getAttribute("data-user-id") : null
    } else {
        sortByMostCommented = document.querySelector(".sort input[value='most-commented']").checked;
    }

    let lastPost = document.querySelector(".fil .post:last-child") || null;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "src/ajax/fetch_posts.php"
        + "?nbPosts=10"
        + (userId == null ? "&sortByMostCommented=" + sortByMostCommented : "")
        + (lastPost ?       "&lastPostId=" + lastPost.getAttribute("data-post-id") : "")
        + (userId != null ? "&userId=" + userId : "")
    , true);
    xhr.responseType = "json";
    xhr.onload = () => {
        if (xhr.status === 200) {
            let posts = xhr.response.posts;
            let fil = document.querySelector(".fil");
            posts.forEach((post) => {
                if (shownPosts.includes(post.id)) {
                    // window.alert("Erreur: un post a été affiché deux fois");
                    return;
                }
                shownPosts.push(post.id);

                let dateStr = new Date(post.date);
                dateStr = "le " + dateStr.getDate() + " " + dateStr.toLocaleString("fr-FR", {month: "long"}) + " " + dateStr.getFullYear();

                let postDiv = document.createElement("div");
                postDiv.classList.add("post");
                postDiv.setAttribute("data-post-id", post.id);
                postDiv.innerHTML = `
                    <aside class="user-identity" data-user-id="${post.authorId}" onclick="redirectToUserPageOnClick(event, this)">
                        <img src="${post.authorAvatar}" alt="Avatar" class="avatar">
                        <span class="nickname">
                            ${post.authorNickname}
                        </span>
                        <span class="username">@${post.authorUsername}</span>
                    </aside>
                    <main>
                        <div class="content">
                            <p>${post.content}</p>
                        </div>
                        <div class="footer">
                            <div class="see-comments-btn-ctn">
                                <button class="btn see-comments-btn">Voir les commentaires</button>
                            </div>
                            <span class="date">
                                ${dateStr}
                            </span>
                        </div>
                    </main>`;
                fil.appendChild(postDiv);
            });
        }
    }
    xhr.send();
}

let scrollable = document.querySelector(".scrollable");
scrollable.addEventListener("scroll", (e) => {
    console.log(scrollable.scrollTop + scrollable.clientHeight + 10, scrollable.scrollHeight);
    if (scrollable.scrollTop + scrollable.clientHeight + 10 < scrollable.scrollHeight)
        return;
    
    fetchTheTenNextPost();
});

fetchTheTenNextPost();