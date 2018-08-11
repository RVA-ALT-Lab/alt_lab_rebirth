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


//alt image alignment on bio page

if (document.getElementsByClassName('bio-img')){
  var imgs = document.getElementsByClassName('bio-img');
  var i;
  var left = "float-left";
  var right = "float-right";
  for (i = 0; i < imgs.length; i++) {
     if(isEven(i)){
      var style = right;
     } else {
      var style = left;
     }
     imgs[i].classList.add(style);
  }

}


function isEven(n) {
  return n == parseFloat(n)? !(n%2) : void 0;
}


if (document.getElementsByClassName('faculty-body')){
  var cards = document.getElementsByClassName('faculty-body');
  var i;
  var left = "square-left";
  var right = "square-right";
  for (i = 0; i < cards.length; i++) {
     if(isEven(i)){
      var style = right;
     } else {
      var style = left;
     }
     cards[i].classList.add(style);
  }

}


//populate modal

jQuery('#contactModal').on('show.bs.modal', function (event) {
  var button = jQuery(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data('person'); // Extract info from data-* attributes
  var name = button.data('name');
  var css = button.data('css');
  var modal = jQuery(this);
  modal.find('#input_1_5').val(recipient);
  modal.find('#the-person').addClass(css);
  modal.find('#the-greeting').html('<h2>Talk to ' + name + '!</h2>');
})

//remove the person
jQuery('#contactModal').on('hide.bs.modal', function (event) {
  var modal = jQuery(this);
  modal.find('#the-person').removeClass();
})

//turn on tool tips
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})