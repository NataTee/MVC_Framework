"use strict";

/*
Name: Natalia Ksenz
Coding 07
Purpose: MVC Frameworks

Filename: contact.js
*/

function clearForm() {
    //this function replaces the text in the text boxes with empty strings
    // and replaces the message area with an html <br>
    $("#nameBox").val("");
    $("#emailBox").val("");
    $("#re-emailBox").val("");
    $("#subjectBox").val("");
    $("#messageBox").val("");
    $("#msg").html("<br>");
}

function sendData(name, email, subject, message) {
    //bring the message area in to report errors or "Sent!"
    let msgArea = document.getElementById("msg");

    $.ajax({
        url: 'processemail',
        type: 'POST',
        data: {name: name, email: email, subject: subject, message: message},
        success: function (val) {
            console.log(val);
            if (val === 'okay') {
                clearForm();
                msgArea.innerHTML = "Your message was sent.";
            } else {
                msgArea.innerHTML = "Processing Error";
            }
        },
        error: function () {
            msgArea.innerHTML = "Sorry, your email was not sent.";
        }
    });

    return;
}

function validate() {
    event.preventDefault();

    // start with an empty error message
    var errorMessage = "";

    //bring the message area in to report errors
    let msgArea = document.getElementById("msg");

    //get the strings from the text boxes and trim them
    var name = $("#nameBox").val().trim();
    var email = $("#emailBox").val().trim();
    var reemail = $("#re-emailBox").val().trim();
    var subject = $("#subjectBox").val().trim();
    var message = $("#messageBox").val().trim();

    //put the trimmed versions back into the form for good user experience (UX)
    $("#nameBox").val(name);
    $("#emailBox").val(email);
    $("#re-emailBox").val(reemail);
    $("#subjectBox").val(subject);
    $("#messageBox").val(message);

    //test the strings from the form and store the error messages
    if (name === "") {
        errorMessage += "Name cannot be empty.<br>";
    }

    if (email === "") {
        errorMessage += "E-mail cannot be empty.<br>";
    }else{
        //validate email
        if(!validEmail(email)) {
            // display an error message
            errorMessage += "Enter correct e-mail address.<br>";
        }
    }

    if (reemail === "") {
        errorMessage += "Please, duplicate your e-mail address.<br>";
    }else{
          if (email !== reemail) {
            errorMessage += "E-mail does not match.<br>";
          }
    }

    if (subject === "") {
        errorMessage += "Subject cannot be empty.<br>";
    }

    if (message === "") {
        errorMessage += "Please, provide details about your experience.<br>";
    }

    if (errorMessage === "") {
        // no errors, so send the data to the server
        console.log("calling ajax");
        sendData(name, email, subject, message);
    } else {
        // report errors if there are any
        console.log("errors");
        msgArea.innerHTML = errorMessage;
    }

    //send the errors back or send an empty string if there is no error
    return errorMessage;

}

$(document).ready(function () {

    // event handler for the clear button
    $("#clearBtn").click(function () {
        clearForm();
    });
    // event handler for the send button
    $("#submitBtn").click(function () {
         validate();
     });
});
