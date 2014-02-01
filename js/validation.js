$(function(event) {
	event.preventDefault();

// Regular expressions 

var expLetters = /^[a-zA-Z ]+$/;
var	expEmail= /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2-4})$/;
var	expNumbers = /^[0-9+]*$/;

// Validate form on typing

$("#contactform").on("keyup", "input.validate", function() {
	console.log($(this));
});

// Validates field

function validateField(field) {
	var errorText= "";
	var error = false;
	var value = field.val();
	var siblings = field.siblings(".errors");


// Tests fields

	switch (field.attr("name")) {
		case "name":
			if (!expLetters.test(value)) {
				error = true;
				errorText += "Please only enter letters in this field.";
			}
		case "number":
			if (!expNumbers.test(value)) {
				error = false;
				errorText += "Please only enter numbers in this field.";
			}
		case "email":
			if (!expEmail.test(value)) {
				error = true;
				errorText += "Please enter a valid email address.";
			}
	}
};

// Display error message

siblings.html(errorText);









});