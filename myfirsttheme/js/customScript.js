$(document).ready(function() {
			if ($(window).width() > 1366) {
			   $(".resize").removeClass("col-xl-1");
			   $(".resize").addClass("col-xl-2");
			   $(".resizeCol-2").removeClass("col-xl-6");
			   $(".resizeCol-2").addClass("col-xl-5");
			   
			}
			else {
			   $(".resize").addClass("col-xl-1");
			   $(".resize").removeClass("col-xl-2");
			   $(".resizeCol-2").addClass("col-xl-6");
			   $(".resizeCol-2").removeClass("col-xl-5");
			}
			
			$('.showAlert').click(function() {
				alert("Database connection is not established");
			});
			
        });