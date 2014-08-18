$(document).ready(function(){
    smoothScroll.init();

    $("[data-toggle='tooltip']").tooltip();
    
    $(".section_header")
	.prepend($("<span>").addClass("highlight").text("["))
	.append($("<span>").addClass("highlight").text("]"));

    $("#team_pills a").click(function($event){
	// first remove any active pills
	$("#team_pills li.active").removeClass("active");

	// hide any open windows
	$("#the-team .in").collapse("hide");

	$(this).parent().addClass("active");
    });

    $("#team_pills li:first-child a").click();
});