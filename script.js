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
function next() {
	
	var first = document.getElementById('1');
	
	first.classList.add("hidden");
	
	document.getElementById("1").style.display = 'none';
	document.getElementById("2").style.display = 'none';
	document.getElementById("3").style.display = 'none';
	document.getElementById("4").style.display = 'none';
	document.getElementById("5").style.display = 'none';
	document.getElementById("6").style.display = 'none';
	
	var temp = Math.floor(Math.random() * Math.floor(6)) + 1;
	
	document.getElementById(temp).style.display = 'block';
	
  
}