$(function main() {
	(function updateTime() {
		time.innerText = new Date().toLocaleTimeString();
		setTimeout(updateTime, 1000);
	})();
	
	(function() {
		function checkResize() {			
			if ($(window).width() <= 767) {
				$("#banner-navbar").addClass("navbar-fixed-top"); 
				$("#banner-bottom").addClass("change");
			}
			else {
				$("#banner-navbar").removeClass("navbar-fixed-top"); 
				$("#banner-bottom").removeClass("change");
			}
		}
		
		checkResize();
		$(window).resize(() => checkResize());
	})();
	
	(function setYear() {
		let dates = [].slice.call(document.querySelectorAll(".currYear"));
		dates.map(d => {
			d.innerText = (new Date()).getFullYear();
			return d;
		});
	})();
	
	$("#imgTop").click(() => $("html, body").animate({ scrollTop: 0 }, "medium"));
	
	$(document).scroll(function() {
		if ($("#banner-bottom").is(":visible")) 
			$("#banner-bottom").addClass("navbar-hide") 
				&& document.getElementById("navbar-burger").classList.remove("change") 
				|| $("#banner-bottom").removeClass("change");
	});
	
	$("html").click(e => {		
		let inNavBar = false, currNode = e.target;
		while (inNavBar == false) {
			inNavBar = currNode.id == "banner-bottom";
			
			if (currNode.parent == undefined) {
				break;
			}
			currNode = currNode.parent;
		}
		
		if (e.target.id == "navbar-burger" || (e.target.parent != undefined && e.target.parent.id == "navbar-burger")) {
			document.getElementById("navbar-burger").classList.toggle("change");
		
			if ($("#banner-bottom").is(":visible")) {
				$("#banner-bottom").addClass("navbar-hide").removeClass("change");
			}
			else {
				$("#banner-bottom").removeClass("navbar-hide").addClass("change");
			}
		}
		else if (!inNavBar) {
			if ($("#banner-bottom").is(":visible")) {
				document.getElementById("navbar-burger").classList.toggle("change");
				$("#banner-bottom").addClass("navbar-hide").removeClass("change");
			}			
		}
	});
});