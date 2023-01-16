let editButtons = document.querySelectorAll('.edit-btn');

editButtons.forEach((editButton) => {
    editButton.addEventListener('click', () => {
        let input = editButton.parentElement.querySelector('label > *');

        function setTextInputEditable() {
            input.removeAttribute("disabled");
            input.focus();
            if (input.type != "date")
                input.setSelectionRange(0, input.value.length);
            if (input.type == "password")
                input.value = "";
    
            let oldInputValue = input.value;
    
            input.addEventListener('keyup', (e) => {
                if (oldInputValue == input.value)
                    return;
    
                editButton.style.display = "block";
                oldInputValue = input.value;
            });
    
            editButton.innerHTML = "Sauvegarder";
            editButton.style.display = "none";
        }

        function setImageInputEditable() {
            //create form enctype="multipart/form-data"
            let form = document.createElement("form");
            form.method = "POST";
            form.enctype = "multipart/form-data";
            form.style.display = "none";
            input.parentElement.appendChild(form);

            let fileInput = document.createElement("input");
            form.append(fileInput);
            fileInput.type = "file";
            fileInput.accept = "image/*";
            fileInput.style.display = "none";
            fileInput.addEventListener('change', () => {
                let file = fileInput.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    input.src = reader.result;
                    input.value = reader.result;
                    editButton.innerHTML = "Sauvegarder";
                    editButton.style.display = "block";
                };
            });
            input.parentElement.appendChild(fileInput);
            fileInput.click();
        }

        function saveTextInput() {
            const data = new FormData();
            data.append(input.name, input.value);

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "src/ajax/update_" + input.name + ".php", true);
            xhr.responseType = "json";
            xhr.onload = () => {
                if (xhr.status == 200) {
                    if (xhr.response.status == "success") {
                        input.setAttribute("disabled", "");
                        editButton.innerHTML = "Modifier";
                        editButton.removeAttribute("style");
                        return;
                    }

                    window.alert("Erreur : " + xhr.response.error);
                }
            };
            xhr.send(data);
        }

        if (input.type == "image" && editButton.innerHTML == "Modifier") {
                setImageInputEditable();
            return;
        }
        
        if (editButton.innerHTML == "Modifier")
            setTextInputEditable();
        else
            saveTextInput();
    });
});