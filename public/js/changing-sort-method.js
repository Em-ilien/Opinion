let sortInputs = document.querySelectorAll(".sort input");

sortInputs.forEach((sortInput) => {
    sortInput.addEventListener("change", (e) => {
        if (!sortInput.checked)
            return;
        
        window.location = "?page=fil_principal&sortMethod=" + sortInput.value;
    });
});