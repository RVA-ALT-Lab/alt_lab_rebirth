//ALT LAB STUFF


// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("wrapper-navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop+60;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//supposed to move focus to search box but doesn't seem to be working
document.getElementById('search-button').addEventListener('click', function(){
   var input = document.getElementById('s');
    input.focus();
});

function topicHighlighter(){
	if (document.getElementsByClassName('topic-link')){
		var topicLinks = document.getElementsByClassName('topic-link');
		for (var i = 0; i < topicLinks.length; i++) {
  			topicLinks[i].addEventListener("click", function() {
  				if (document.getElementsByClassName("topic-highlight")>0){
		   			var current = document.getElementsByClassName("topic-highlight");
		    		current[0].className = current[0].className.replace(" topic-highlight", "");
		    	}
		    this.parentElement.className += " topic-highlight";
		  });
		}
	}
}

var addHightlight = function() {	
    var attribute = this.parentElement.classList.add("topic-highlight");
};

topicHighlighter();


if (document.getElementById('topic-parent')){
	window.addEventListener("resize", onSquish);
	window.addEventListener("load", onSquish);
}


function onSquish(){
var screenwidth = window.innerWidth;
var squishLimit = 766;
  if(screenwidth < squishLimit){
    var theIds = getPieces();
    for(i = 0; i < theIds.length; i++){
     jQuery('#'+theIds[i]).insertAfter('#'+theIds[i]+'-parent');
    }
  }
}

function getPieces(){
  var topics = document.getElementsByClassName('accordion');//formerly topic-slide
  var theIds = [];
  for (i = 0; i < topics.length; i++) {
    var id = topics[i].getAttribute('id'); 
    theIds.push(id);
  }
  return theIds;
}