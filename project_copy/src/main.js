function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

function auth(email, password) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "send.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (xhr.responseText === "success") {
                    window.location = "./src/upload.php";
                } else if (xhr.responseText === "empty") {
                    alert("Both email and password are required");
                } else if (xhr.responseText === "invalid") {
                    alert("Invalid email or password");
                } else if (xhr.responseText === "error") {
                    alert("Error occurred: " + xhr.responseText);
                } else {
                    alert("Unknown response from server");
                }
            } else {
                alert("Error: " + xhr.status);
            }
        }
    };

    const params = `email=${email}&pass=${password}`;
    xhr.send(params);
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        auth(email, password);
    });

    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            const target = e.target;
            const value = target.value;

            if (target.id === "signupUsername" && (value.length === 0 || value.length < 9)) {
                setInputError(inputElement, "Username must be at least 9 characters in length");
            }

            if (target.id === "email") {
                const email = value;
                const regex = /^[a-zA-Z0-9._-]+@vitstudent\.ac\.in$/;

                if (!regex.test(email)) {
                    setInputError(target, "Please enter a valid VIT student email address!");
                }
            }

            if (target.id === "password" && value.length < 8) {
                setInputError(target, "Password must be at least 8 characters in length");
            }

            if (target.id === "confirmPassword" && value !== document.getElementById("password").value) {
                setInputError(target, "Passwords do not match");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});
