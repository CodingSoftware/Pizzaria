
$(document).ready(function(){




$("a.side").click(function(){


	if( $("a.side").hasClass("desativado")){
	$("a.side").addClass("ativado");
	$("a.side").removeClass("desativado");
	}else{
	$("a.side").addClass("desativado");
	$("a.side").removeClass("ativado");
	}


	if( $("div.container-fluid").hasClass("desativado")){
	$("div.container-fluid").addClass("ativado");
	$("div.container-fluid").removeClass("desativado");
	}else{
	$("div.container-fluid").addClass("desativado");
	$("div.container-fluid").removeClass("ativado");
	}



});






});
