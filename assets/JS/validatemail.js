
// function sendEmail() {
//     var name = $("#name");
//     var email = $("#email");
//     var subject = $("#subject");
//     var body = $("#body");

//     if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
//         $.ajax({
//             url: 'sendEmail.php',
//             methode: 'POST',
//             dataType: 'json',
//             data: {
//                 name: name.val(),
//                 email: email.val(),
//                 subject: subject.val(),
//                 body: body.val()
//             }, success: function (response) {
//                 $('myForm')[0].reset();
//                 $('.sent-notification').text("Message sent succesfully.");
//             }
//         });
//     }
// }

// function isNotEmpty(caller) {
//     if (caller.val() === "") {
//         caller.css('border', '1px solid red');
//         return false;
//     }
//     else {
//         caller.css('border', '');
//         return true;
//     }
// }

