// // Portrait url
// function myFunction() {
//   var x = document.getElementById("mainPageImg").src;
//   document.getElementById("demo").innerHTML = x;
// }

// Timer alert message for email
function emailFunction() {
  setTimeout(function(){ alert('To copy my email address, left click the link and choose "Copy email address."'); }, 2000); // 2000 equals to 2 seconds
}

// HTML Linking functions
function homeLink() {
  location.replace("index.html")
}
function tutorialLink() {
  location.replace("tutorials.html")
}
function testimonialsLink() {
  location.replace("testimonials.html")
}
function signinLink() {
  location.replace("signin.html")
}
function contactLink() {
  location.replace("contact.html")
}
