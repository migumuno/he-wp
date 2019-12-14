if ("geolocation" in navigator) {
	console.log('Habemus geolocalización');
	navigator.geolocation.getCurrentPosition(function (position) {
		var latitude = position.coords.latitude,
			longitude = position.coords.longitude;

		console.log(latitude, longitude);


		var xhttp = new XMLHttpRequest(),
			url = '/wp-admin/admin-ajax.php',
			params = "action=send_he_geo&lat=" + latitude + "&long=" + longitude;

		xhttp.onreadystatechange = function () {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				console.log('Enviado: ' + response);
			}
		};

		xhttp.open("POST", url);
		xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		xhttp.send(params);
	});
} else {
	console.warn('Ups, no hay geolocalización');
}