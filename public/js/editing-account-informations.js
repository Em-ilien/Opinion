let editButtons = document.querySelectorAll('.edit-btn');

editButtons.forEach((editButton) => {
    editButton.addEventListener('click', () => {
        let input = editButton.parentElement.querySelector('label > *');

        function setTextInputEditable() {
            input.removeAttribute("disabled");
            input.focus();
            input.setSelectionRange(0, input.value.length);
    
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
            let fileInput = document.createElement("input");
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

        function saveInput() {
            input.setAttribute("disabled", "");
            editButton.innerHTML = "Modifier";
        }

        if (editButton.innerHTML == "Modifier")
            if (input.type != "image")
                setTextInputEditable();
            else
                setImageInputEditable();
        else
            saveInput();
    });
});