


var backgroundImages = new Array();
backgroundImages[0] = "img/";
backgroundImages[1] = "img/";
backgroundImages[2] = "img/";
backgroundImages[3] = "img/";
backgroundImages[4] = "img/";
backgroundImages[5] = "img/";

var speed = 5000;	// interval between slide (in ms)

// preload images
var imgLoc = new Array();
for (i = 0; i < backgroundImages.length; i++){
	imgLoc[i] = new Image();
	imgLoc[i].src = backgroundImages[i];
}

// counter
var cntr = -1;

// change background
function slideback() {
	if (cntr < backgroundImages.length-1) cntr++;
	else cntr = 0;
	document.body.background = imgLoc[cntr].src;
}

// when page is loaded call function for changing backgrounds
if (document.all || document.getElementById)
	window.onload=function(){slideback(); setInterval(slideback, speed);};
