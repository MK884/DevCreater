function viewMore() {
	const registerPage = document.querySelector(".patient-registration");
	registerPage.classList.toggle("active");
	if (registerPage.classList.contains("active")) {
		document.body.style.overflow = "hidden";
	} else {
		document.body.style.overflow = "initial";
	}
}

