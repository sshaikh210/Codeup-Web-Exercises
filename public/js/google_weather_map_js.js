"use strict";
$(document).ready(function(){

function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      	center: new google.maps.LatLng(29.42412, -98.493629),
      	zoom: 4,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
    var marker = { lat: 29.42412, lng: -98.493629 };

	var marker = new google.maps.Marker({
	    position: marker,
	    map: map,
	    draggable:true,
	    title:"Drag me!"
	});
	var lat = marker.getPosition().lat();
	var lng = marker.getPosition().lng();
  }
  google.maps.event.addDomListener(window, 'load', initialize);

function myFunction() {
    var long = document.getElementById("longitude").value;
    var lat = document.getElementById("latitude").value;
    updateWeather(long, lat);
}
	$('#updateWeather').click(myFunction);
function updateWeather(long, lat){

	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	    APPID: "816ca1d3802467b5b36bd69afe907e04",
	    lon:   long,
	    lat:    lat,
	    units: "imperial",
	    cnt:   3,
	}).done(function(data) {
	    console.log(data);
	var weather = " ";

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
	}
	updateWeather(-98.493629, 29.42412)
});
