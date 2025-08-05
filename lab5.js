document.getElementById("userForm").addEventListener("submit", function(event) {
    let isValid = true;
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const course = document.getElementById("course").value;
  
    const namePattern = /^[A-Za-z\s]$/; 
    if (fullName === "") {
      alert("Full Name is required.");
      isValid = false;
    }
    else if (!namePattern.match(fullName)) {
      alert("Please provide a valid name (letters and spaces only).");
      isValid = false;
    }
  
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.match(emailPattern)) {
      alert("Please enter a valid email.");
      isValid = false;
    }
  
    if (age < 18 || age === "") {
      alert("You must be at least 18 years old.");
      isValid = false;
    }
  
    if (course === "") {
      alert("Please select a course.");
      isValid = false;
    }
  
    if (!isValid) {
      event.preventDefault();  
    }
  });
  