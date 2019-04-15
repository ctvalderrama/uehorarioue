$(document).ready(function(){
	$("#errorMsg").hide();
	$("#btnLogin").click(function(){
		var usu = $("#username").val();
		var pass = $("#password").val();
		$.post("login.php",{ usu : usu, pass : pass},function(respuesta){
			if (respuesta == true) {
        		$.mobile.changePage("login.html");
        	}
        	else{
        		$.mobile.changePage('#pageError', 'pop', true, true);
        		/*$("#errorMsg").fadeIn(300);
        		$("#errorMsg").css("display", "block");*/
        	}
		});
    });
});