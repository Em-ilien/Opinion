function search(e) {
    let xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('GET', 'src/ajax/search_user.php?query=' + e.target.value, true);
    xhr.onload = () => {
        if (xhr.response.status == "success") {

            if (document.querySelector('.search-results'))
                document.querySelector('.search-results').remove();

            let resultsDiv = document.createElement('div');
            resultsDiv.classList.add('search-results');
            resultsDiv.style.width = e.target.offsetWidth + 'px';
            resultsDiv.style.left = e.target.offsetLeft + 'px';
            resultsDiv.style.top = e.target.offsetTop + e.target.offsetHeight + 16 + 'px';
            document.body.appendChild(resultsDiv);

            xhr.response.users.forEach(user => {
                resultsDiv.innerHTML += `
                    <div class='user' data-user-id='${user.id}' onclick='window.location="?page=user&userId=${user.id}"'>
                        <div class='avatar'>
                            <img src='${user.avatar}' alt='Avatar'>
                        </div>
                        <div class='names'>
                            <span class='nickname'>${user.nickname}</span>
                            <span class='username'>@${user.username}</span>
                        </div>
                    </div>`;
            });
        }
    };
    xhr.send();
}