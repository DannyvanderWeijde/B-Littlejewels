window.onscroll = function() {checkNavbar()};
var navbar = document.getElementsByTagName("nav")[0];
var sticky = navbar.offsetTop;
var clientWidth = document.documentElement.clientWidth;
clientWidth = clientWidth + 16;

function checkNavbar(){
	if(clientWidth >= 768){
		if (window.pageYOffset >= sticky) {
    		navbar.classList.add("sticky")
  		}else{
    		navbar.classList.remove("sticky");
  		}
	}
}