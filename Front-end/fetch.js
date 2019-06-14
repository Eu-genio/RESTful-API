$(document).ready(function(){
	//Original code, doesn't work as it doesn't send out a json string for some reason, time to hard code
	$('form').submit(function(event){
	var array = $(this).serialize().split("&");
	var json = JSON.stringify(array);


   
    // for(var key in array)
    // {
    //     obj[array[key].split("=")[0]] = array[key].split("=")[1];
    // }

    var newarray = json.replace(/\=/g, ':');
    alert(newarray);
    newarray = JSON.stringify(newarray);
    var type1 = $(document.activeElement).attr('name');
	$.ajax({
		type: ""+type1+"",
		dataType: 'json',
		data: newarray,
		url: 'api.php',
		success: function(data){
			alert(data);
		}
	})

	});
	// $('form').submit(function(event){
	// 	var formID = $(this).attr('id');
	// 	alert(formID);
	// 	var input = new Array();
	// 	if(formID == 'formPost' || formID =='formUpdate'){
	// 	$("#"+formID+"").each(function(i){
	// 		input[i] = $("input:text").val(); // This is the jquery object of the input, do what you will
	// 		alert(input[i]);
	// 	});
		
	// }
	// })
});