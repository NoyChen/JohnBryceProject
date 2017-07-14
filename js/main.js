$(function(){

	$("#loginForm").on("submit", function(e){
		e.preventDefault();

		$("#errorWrapper").hide();
		$("#error").text("");

		var email = $("#email").val();
		var password = $("#password").val();

		$.post("/api/auth.php", {email: email, password: password}, function(data){
			if(!data.success){
				$("#errorWrapper").show();
				$("#error").text(data.error);
				return true;
			}

			window.location.href = "/";
		});

	});


});