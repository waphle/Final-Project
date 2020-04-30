// HTML Linking functions
function homeLink() {
  location.replace("index.php")
}
function tutorialLink() {
  location.replace("tutorials.php")
}
function testimonialsLink() {
  location.replace("testimonials.php")
}
function signinLink() {
  location.replace("signin.php")
}
function contactLink() {
  location.replace("contact.php")
}
window.onload = function() {
		$("next").onclick = questionOrAnswer;
	};