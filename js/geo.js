if ("geolocation" in navigator) {
	console.log('Habemus geolocalización');
	navigator.geolocation.getCurrentPosition(function (position) {
		var latitude = position.coords.latitude,
			longitude = position.coords.longitude;

		console.log(latitude, longitude);

		jQuery.ajax({
			type: "post",
			url: '/wp-admin/admin-ajax.php', // Pon aquí tu URL
			data: {
				lat: latitude,
				long: longitude,
				action: "send_he_geo"
			},
			error: function (response) {
				console.log(response);
			},
			success: function (response) {
				console.log('Enviado: ' + response);
			}
		})
	});
} else {
	console.warn('Ups, no hay geolocalización');
}