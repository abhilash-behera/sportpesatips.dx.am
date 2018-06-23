function del(id) {
	var r = confirm("Are you Sure to delete this game !?")
	if (r == true) {
		data = "id=" + id;
		$.ajax({
			method: "post",
			url: "delete.php",
			data: data,
			success: function (data) {

				if (data == "") {

					document.location.reload();
					/*
					//refeshing gameslist
					$.ajax({
					method: "post",
					url: "gameslist.php",
					data: data,
					success: function(data){ $("#games").html(data)	}
						});	
							*/
				} else {

				}
			}
		});

	}
}

function del_vip(id){
	var r = confirm("Are you Sure to delete this game !?")
	if (r == true) {
		data = "id=" + id;
		$.ajax({
			method: "post",
			url: "delete_vip.php",
			data: data,
			success: function (data) {

				if (data == "") {
					document.location.reload();
				} else {

				}
			}
		});

	}
}

function del_sure(id){
	var r = confirm("Are you Sure to delete this game !?")
	if (r == true) {
		data = "id=" + id;
		$.ajax({
			method: "post",
			url: "delete_sure.php",
			data: data,
			success: function (data) {

				if (data == "") {
					document.location.reload();
				} else {

				}
			}
		});

	}
}


$('document').ready(function () {

	//POST GAME	
	$("#gamepost").on('submit', (function (e) {
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "gamesposter.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{

				if (data == "") {
					$("#error").html(''); //clearing error message

					$("#time").val('');
					$("#date").val('');
					$("#league").val('');
					$("#teamA").val('');
					$("#teamB").val('');
					$("#tip").val('');
					$("#odds").val('');
					document.location.reload();
				} else {
					$("#error").html('<span class="alert-danger">' + data + '</span>');
				}
			}
		});

	}));


	//Post VIP game
	$("#vip_gamepost").on('submit', function (e) {
		console.log('posting vip game');
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "vip_gamesposter.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				console.log('Success in posting vip game: ',data);

				if (data == "") {
					$("#error").html(''); //clearing error message

					$("#time").val('');
					$("#date").val('');
					$("#league").val('');
					$("#teamA").val('');
					$("#teamB").val('');
					$("#tip").val('');
					$("#odds").val('');
					document.location.reload();
				} else {
					$("#error").html('<span class="alert-danger">' + data + '</span>');
				}
			}
		});
	});

	$("#sure_gamepost").on('submit',function(e){
		console.log('posting sure game');
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "sure_gamesposter.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				console.log('Success in posting vip game: ',data);

				if (data == "") {
					$("#error").html(''); //clearing error message

					$("#time").val('');
					$("#date").val('');
					$("#league").val('');
					$("#teamA").val('');
					$("#teamB").val('');
					$("#tip").val('');
					$("#odds").val('');
					document.location.reload();
				} else {
					$("#error").html('<span class="alert-danger">' + data + '</span>');
				}
			}
		});
	});


	//UPDATE GAME	
	$("#gameupdate").on('submit', (function (e) {
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "gamesupdator.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				} else {
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');
				}
			}
		});
	}));

	//Update VIP Game
	$("#vip_gameupdate").on('submit', function (e) {
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "vip_gamesupdator.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				} else {
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');
				}
			}
		});
	});

	$("#sure_gameupdate").on('submit',function(e){
		e.preventDefault();
		$("#error").html('');
		$.ajax({
			url: "sure_gamesupdator.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				} else {
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');
				}
			}
		});
	});


	//GAME OUTCOME	
	$("#updateresults").on('submit', (function (e) {
		e.preventDefault();
		$("#error").html('');

		$.ajax({
			url: "gamesoutcome.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');



				} else {
					$("#error").html(data);
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				}
			}
		});

	}));

	//VIP Game outcome
	$("#vip_updateresults").on('submit',function(e){
		e.preventDefault();
		$("#error").html('');

		$.ajax({
			url: "vip_gamesoutcome.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');



				} else {
					$("#error").html(data);
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				}
			}
		});
	});

	$("#sure_updateresults").on('submit',function(e){
		e.preventDefault();
		$("#error").html('');

		$.ajax({
			url: "sure_gamesoutcome.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData: false,        // To send DOMDocument or non processed data file it is set to false
			success: function (data)   // A function to be called if request succeeds
			{
				if (data == "") {
					$("#error").html(''); //clearing error message
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');



				} else {
					$("#error").html(data);
					$("#updats").html('<div class="alert alert-success"><center><h3> UPDATED <br /> <a href="index.php">BACK</a> </h3></center></div>');

				}
			}
		});
	});


});