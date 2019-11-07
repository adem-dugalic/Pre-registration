function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "FENS"){
    var optionArray = ["Program|Program","CS|CS","SE|SE","EE|EE","ARCH|ARCH","BIO|BIO"];
  } else if(s1.value == "FAS"){
    var optionArray = ["Program|Program","PSY|PSY","SPS|SPS","VAV|VAV","EL|EL","CULT|CULT"];
  }else if(s1.value == "FBA"){
    var optionArray = ["Program|Program","IBF|IBF","IR|IR","ECO|ECO","MAN|MAN"];
  }else if(s1.value == "FL"){
    var optionArray = ["Program|Program","ELL|ELL","TLL|TLL","CEI|CEI"];
  }else if(s1.value == "FE"){
    var optionArray = ["Program|Program","BA|BA","MA1|MA1","MA2|MA2"];
  }

  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}


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