let sortInputs = document.querySelectorAll(".sort input");

sortInputs.forEach((sortInput) => {
    sortInput.addEventListener("change", (e) => {
        if (!sortInput.checked)
            return;
        
        window.location = "index.php?page=fil_principal&sortMethod=" + sortInput.value;
    });
});