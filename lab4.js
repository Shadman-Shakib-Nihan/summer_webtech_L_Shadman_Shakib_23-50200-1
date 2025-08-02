// Task 1: Counter functionality
let count = 0;
let incrementButton = document.getElementById("incrementButton");
let decrementButton = document.getElementById("decrementButton");

function changeCount(value) {
    count += value;
    document.getElementById("count").innerText = count;
}

incrementButton.addEventListener("click", function() {
    changeCount(1);
});

decrementButton.addEventListener("click", function() {
    changeCount(-1);
});

//  BMI Calculator functionality
let weightInput = document.getElementById("weight");
let heightInput = document.getElementById("height");

function calculateBMI() {
    let weight = parseFloat(weightInput.value);
    let height = parseFloat(heightInput.value);

    if (isNaN(weight) || isNaN(height) || height <= 0) {
        alert("Please enter valid weight and height.");
        return;
    }

    height = height * 0.3048; 

    let bmi = weight / (height * height);
    document.getElementById("bmiResult").innerText = "Your BMI is: " + bmi.toFixed(2);
}

let calculateButton = document.getElementById("Calculate");
calculateButton.addEventListener("click", calculateBMI);

//  Change  color of div box
let colorBox = document.getElementById("colorBox");
let colorInput = document.getElementById("colorPicker");

function changeColor() {
    let selectedColor = colorInput.value;
    colorBox.style.backgroundColor = selectedColor;
}
let changeColorButton = document.getElementById("changeColorButton");
changeColorButton.addEventListener("click", changeColor);


//  Password Validation functionality
document.getElementById('password').addEventListener('input', checkPasswordStrength);

function checkPasswordStrength() {
    const password = document.getElementById('password').value;
    const strength = document.getElementById('passwordStrength');
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (password.length < 8) {
        strength.textContent = "Password is too short!";
        strength.style.color = 'red';
        return false;
    } else if (!regex.test(password)) {
        strength.textContent = "Password should contain at least one uppercase letter, one number, and one special character.";
        strength.style.color = 'orange';
        return false;
    } else {
        strength.textContent = "Password is strong.";
        strength.style.color = 'green';
        return true;
    }
}

function validateForm(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (!checkPasswordStrength()) {
        alert("Password is not strong enough. Make sure it contains at least one uppercase letter, one number, and one special character.");
        //event.preventDefault(); 
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
       // event.preventDefault(); 
        return false;
    }

    alert("Ok, it's done.");
    return true;
}

