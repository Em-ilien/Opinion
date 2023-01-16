let writeBtn = document.querySelector('.write-btn');

function openWritingPostModal(defaultPostOnUserPage = false) {
    let wall = document.createElement('div');
    wall.classList.add('wall');
    document.body.append(wall);
    wall.addEventListener('click', () => {
        wall.remove();
        modal.remove();
    });
    
    let modal = document.createElement('div');
    modal.classList.add('modal');
    modal.innerHTML = `
    <form>
        <textarea name="post" placeholder="Quoi de neuf ?" submitability="length" length-submitability="10" onkeyup="refreshSumbitBtnClickability()"></textarea>
        <div class="options">
            <label>
                <input type="checkbox" name="fil_principal" ` + (!defaultPostOnUserPage ? "checked " : "") + `/>
                Publier sur le Fil principal
            </label>
            <label>
                <input type="checkbox" name="page" ` + (defaultPostOnUserPage ? "checked " : "") + `/>
                Publier sur ma page utilisateur
            </label>
        </div>
        <input type="submit" value="Poster" class="btn post-btn disabled">
    </form>
    `;
    document.body.append(modal);
    modal.querySelector('form').addEventListener('submit', sendPost);
}

function sendPost(e) {
    e.preventDefault();

    if (document.querySelector(".writing-error"))
        document.querySelector(".writing-error").remove();

    const data = new FormData();
    data.append('post', e.target.post.value);
    data.append('fil_principal', e.target.fil_principal.checked);
    data.append('user_page', e.target.page.checked);

    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', "src/ajax/send_post.php");
    xhr.onload = () => {
        if (xhr.response.status == "success") {
            document.location.reload();
            return;
        }

        let error = document.createElement("p");
        error.classList.add("writing-error");
        error.innerHTML = xhr.response.error;

        setTimeout(() => {
            document.querySelector(".modal form").insertBefore(error, document.querySelector(".post-btn"));
        }, 100);

    }
    xhr.send(data);
}