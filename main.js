document.addEventListener("scroll", scrolled);

function scrolled() {
	var flbHead = document.getElementById("header");
	if (document.body.scrollTop>70) {
		flbHead.classList.add("scrolled");	
	}
	else if (document.body.scrollTop<=70) {
		flbHead.classList.remove("scrolled");	
	}
}

$(window).on('load', function() {
	var mb = document.getElementById("menu");
	var n = document.getElementById("nav");
	
	mb.addEventListener("click", function() {
		menuControl();
	});	
	
	function menuControl() {
		var cl = mb.className;
		var wh = $(window).height()-$("header").height();
		var h = (wh-$("#nav-links").height())/2;
		$("#nav-links").css({paddingTop:h+'px'});
		
		if (cl=="ex") {
			mb.classList.remove("ex");
			mb.classList.add("hamburger");
			n.classList.remove("overlay");
		}
		else {
			mb.classList.remove("hamburger");
			mb.classList.add("ex");
			n.classList.add("overlay");
		}
	}
	
	$(window).resize(function() {
		spreadIt();
	});
	spreadIt();
});

function spreadIt() {
	var contentHeight = $("#content").height();
	var windowHeight = $(window).height();
	var footerHeight = $("#footer").height();
	
	//If the window is taller than the content, bump the spread div
	if (contentHeight <= (windowHeight-footerHeight)) {
		$("#spread").height(windowHeight-footerHeight-contentHeight-150);
	}
}

function showAllEvents() {
	$("#show-all-events").css({'display':'none'});
	$(".event-hidden").each(function() {
		$(this).removeClass("event-hidden");
	});
}