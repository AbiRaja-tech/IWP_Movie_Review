function sendEmail(event) {
    event.preventDefault();
    var n = document.getElementById("usernamemail").value;
    var m = document.getElementById("emailmail").value;
    var b = document.getElementById("msgmail").value;
    console.log("hello");
    console.log(n);
    console.log(m);
    console.log(b);
    Email.send({
      Host: "smtp.gmail.com",
      Username: n,
      Password: n,
      To: 'arrssekaran@gmail.com',
      From: m,
      Subject:"Blog Comment",
      Body: b,
    })
      .then(function (message) {
        alert("mail sent successfully")
      });
}