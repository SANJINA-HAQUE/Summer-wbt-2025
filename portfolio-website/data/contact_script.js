var database = [
    {
        username: "sam",
        password: "san"
    }
]

var params = new URLSearchParams(window.location.search);
var formData = {};
params.forEach(function(value, key) {
    if (formData[key]) {
        formData[key] += ", " + value; 
    } else {
        formData[key] = value;
    }
});

var userNamePrompt = prompt("Enter your username?");
var passwordPrompt = prompt("Enter your password?");

function signIn(user, pass){
    if(user === database[0].username && pass === database[0].password){
        document.body.innerHTML = 
         `<div class="form-data">
                <h1>Submitted Contact Form Data</h1>
                <p><strong>First Name:</strong> ${formData.firstname || "N/A"}</p>
                <p><strong>Last Name:</strong> ${formData.lastname || "N/A"}</p>
                <p><strong>Email:</strong> ${formData.email || "N/A"}</p>
                <p><strong>Consulting Date:</strong> ${formData.date || "N/A"}</p>
                <p><strong>Contacting reason:</strong> ${formData.reason || "N/A"}</p>
                <p><strong>Service:</strong> ${formData.services || "N/A"}</p>
                <p><strong>Job Offering:</strong> ${formData.job || "N/A"}</p>
                <p><strong>Position:</strong> ${formData.position || "N/A"}</p>
            </div>`;
    }else{
        document.body.innerHTML = 
        `<div class="form-data" style="text-align: center; color: red;">
                <h1>Login Failed</h1>
                <p>Incorrect username or password. Please try again.</p>
        </div>`;
    }
}

signIn(userNamePrompt, passwordPrompt);