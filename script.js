
form.addEventListener('submit',(e)=>
{


    const name = document.getElementById('name').value
    const dateofbirth = document.getElementById('dateofbirth').value
    const email = document.getElementById(' email')
    const mobileNumber = document.getElementById('mobilenumber').value
    const Gender = document.getElementById('Gender').value
    const Occupation = document.getElementById('Occupation').value
    
    const Idtype = document.getElementById('mobilenumber').value
    const idnumber = document.getElementById('Gender').value
    const issueauthority = document.getElementById('Occupation').value
    const errorElement  = document.getElementById('error')
    
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
let messages=[];

if (name === '' || name === null) {
    messages.push("Name is required");
}
if (dateofbirth === '' || dateOfBirth === null) {
    messages.push("Date of Birth is required");
}

if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

if (email === '' || email === null) {
    messages.push("Email is required");
}

if (mobileNumber === '' || mobileNumber === null) {
    messages.push("Mobile Number is required");
}


var phoneNumber = phoneNumberInput.value.replace(/\D/g, '');

// Limit to 11 digits
if (phoneNumber.length > 11) {
  phoneNumber = phoneNumber.slice(0, 11);
}

// Update the input value
phoneNumber.value = phoneNumber;

if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ');
} else {
    // If no errors, submit the form
    form.submit();
}

});




