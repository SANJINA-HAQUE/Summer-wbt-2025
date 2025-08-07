function contactForm() {
    var submit = prompt("Please fill up the form \n");
    
    if(submit !== ""){
   
        alert("You did not filled up the form");
     
    } else if(submit === "") {

        var reason = prompt("Enter Reason For Contacting: \n Project \n Thesis \n Offer \n Meet & Greet");

        if(reason !== ""){
            alert("Reason entered");
        } else{
            alert("Please enter one reason")
        }

        var service = prompt("Select an option: \n SEO \n Web Development \n Graphics Design \n Lead Generation");

        if(service !== ""){
            alert("service entered");
        } else{
            alert("Please enter one service")
        }
        
         var job = prompt("Are you contacting for providing job? \n Yes \n No");

        if(job !== ""){
            alert("Job contact reason entered");
        } else{
            alert("Please enter one job")
        }

        var position = prompt("Enter your position in your company: \n CEO \n HR \n Employee");

        if (position !== "") {
            alert("Position entered");
        } else {
            alert("Please enter one position");
        }
    alert("You have chosen: \n Reason for contacting: " + reason + "\n Services: " + service + "\n Are you contacting for job? \n" + job + "\n Your position: " + position + "\n Thank you for your submission. We will contact you as soon as possible.");
    }
}