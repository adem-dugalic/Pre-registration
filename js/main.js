$(document).ready(function(){
	$("#faculty").click(function() {
		var faculty = $('#faculty').val();
		$.post('ajax/ajax.php', {faculty: faculty},
			function(data){
				$('#courseList').text(data);
			});
	});
	
	$(".info-item .btn").click(function(){
  	$(".container").toggleClass("log-in");
	});
});