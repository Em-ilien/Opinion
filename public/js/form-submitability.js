let submitBtn = document.querySelector(".validation-button") || document.querySelector('.btn[type="submit"]');

function refreshSumbitBtnClickability() {
	submitBtn = document.querySelector(".validation-button") || document.querySelector('.btn[type="submit"]');

	if (!allRequiredCheckboxsAreChecked()) {
		submitBtn.classList.add("disabled");
		return;
	}

	if (!allRequiredTextInputsAreFilled()) {
		submitBtn.classList.add("disabled");
		return;
	}

	if (!allRequiredPasswordInputsAreFilled()) {
		submitBtn.classList.add("disabled");
		return;
	}

	if (!allRequiredDateInputsAreFilled()) {
		submitBtn.classList.add("disabled");
		return;
	}

	submitBtn.classList.remove("disabled");
}

function allRequiredCheckboxsAreChecked() {
	let checkboxs = document.querySelectorAll("input[type='checkbox'][submitability='checked']");

	for (const checkbox of checkboxs) {
		if (checkbox.checked)
			continue;

		return false;
	}

	return true;
}

function allRequiredTextInputsAreFilled() {
	let textInputs = document.querySelectorAll("input[type='text'][submitability='length']");

	for (const textInput of textInputs) {
		if (textInput.value.length >= textInput.getAttribute("length-submitability"))
			continue;

		return false;
	}

	let textareas = document.querySelectorAll("textarea[submitability='length']");

	for (const textarea of textareas) {
		if (textarea.value.length >= textarea.getAttribute("length-submitability"))
			continue;

		return false;
	}

	return true;
}

function allRequiredPasswordInputsAreFilled() {
	let textInputs = document.querySelectorAll("input[type='password'][submitability='length']");

	for (const textInput of textInputs) {
		if (textInput.value.length >= textInput.getAttribute("length-submitability"))
			continue;

		return false;
	}

	return true;
}

function allRequiredDateInputsAreFilled() {
	let dateInputs = document.querySelectorAll("input[type='date'][submitability='filled']");

	for (const dateInput of dateInputs) {
		if (dateInput.value == undefined || dateInput.value == null || dateInput.value == "")
			return false;
		
		let day = dateInput.value.split("-")[2];
		let month = dateInput.value.split("-")[1];
		let year = dateInput.value.split("-")[0];
		day = parseInt(day);
		month = parseInt(month);
		year = parseInt(year);

		if (year < 1900)
			return false;

		let birthday = new Date(year, month - 1, day);

		if (birthday > new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate()))
			return false;
	}

	return true;
}

if (submitBtn)
	submitBtn.addEventListener("click", (e) => {
		if (!submitBtn.classList.contains("disabled"))
			return;

		e.preventDefault();
	});