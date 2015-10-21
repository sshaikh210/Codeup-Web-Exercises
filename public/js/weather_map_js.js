"use strict";
(function() {

	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	    APPID: "816ca1d3802467b5b36bd69afe907e04",
	    lat:    29.42412,
	    lon:   -98.493629,
	    units: "imperial",
	    cnt:   16,
	}).done(function(data) {
	    console.log(data);
	var weather = " ";
	var humidity = " ";
	var rain = " ";
	var press = " ";
	var speed = " ";

	    data.list.forEach(function(day){
	    	console.log("High of: " + day.temp.max);
	    	console.log("Low of: " + day.temp.min);
			console.log("Current Humidity: " + day.humidity);
			console.log("Description: " + day.weather[0].description);
			console.log("Pressure: " + day.pressure);
			console.log("Speed of Wind: " + day.speed);
			console.log("Date: " + day.dt * 1000);

			weather += '<div class="col-md-4">';
			weather += '<div class="date">' + moment.unix(day.dt).format("ddd, MMM Do") + '</div>';
			weather += '<img class="weatherIcon" src="http://openweathermap.org/img/w/' + day.weather[0].icon + '.png">';
			weather += '<p class="forecast"><br>' + '<div class="temp">' + Math.round(day.temp.max) +"°F" + "/" + Math.round(day.temp.min) + "°F" + '</div><br>';
			weather += "Humidity: " + day.humidity + '<br>';
			weather +=  "Description: " + day.weather[0].description + '<br>';
			weather += "Pressure: " + Math.round(day.pressure) + '<br>' + "Wind Speed: " + Math.round(day.speed) + '</p>';
			weather += "</div>";
				$('#for').html(weather)
	
})
	}).fail(function(jqXhr) {
		console.log("Ajax request failed");
		console.log(jqXhr);
	});
	
})();
