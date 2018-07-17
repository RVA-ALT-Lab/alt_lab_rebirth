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


//HIGHLIGHT TOPIC ELEMENT ON CLICK

function topicHighlighter(){
	if (document.getElementsByClassName('topic-link')){
		var topicLinks = document.getElementsByClassName('topic-link');
		for (var i = 0; i < topicLinks.length; i++) {
  			topicLinks[i].addEventListener("click", function() {
  			jQuery(".topic-highlight").removeClass('topic-highlight');
		    this.parentElement.className += " topic-highlight";
		  });
		}
	}
}

var addHightlight = function() {	
    var attribute = this.parentElement.classList.add("topic-highlight");
};

topicHighlighter();





//RESTRUCTURE FOR TOPICS ON HOME PAGE

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
  if(screenwidth > squishLimit){
    var theIds = getPieces();
    for(i = 0; i < theIds.length; i++){
      if (i < 3){
        jQuery('#'+theIds[i]).insertAfter('#placeholder-3');
      } 
      if (i > 3 && i < 6){
        jQuery('#'+theIds[i]).insertAfter('#placeholder-6');
      }
      if (i > 6 && i < 9){
        jQuery('#'+theIds[i]).insertAfter('#placeholder-9');
      }
      if (i > 9 && i < 12){
        jQuery('#'+theIds[i]).insertAfter('#placeholder-12');
      }
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
