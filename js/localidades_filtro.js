
function bairro1() {
var mapProp= {
  center:new google.maps.LatLng(-23.701918, -46.572119,),
  zoom:13,
};
	(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);



		var
		mapObject,
		markers = [],
		markersData = {
			'Marker': [

 
			{
				type_point: 'SBC',
				name: 'SBC',
				location_latitude:  -23.701918,
				location_longitude: -46.572119,
				map_image_url: 'images/single-listing/gallery-6.jpg',
				rate: '4.5',
				name_point: 'Ocean Paradise',
				url_point: 'single-listing-one.html',
				review: '13 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.698811,

				location_longitude: -46.561939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.699411,

				location_longitude: -46.569939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
		
			
			{
				type_point: 'Event',
				name: 'Muay Live Show',
				location_latitude: -23.696574,
				location_longitude: -46.567466,   
				map_image_url: 'images/category/event/muay.jpg',
				rate: '4',
				name_point: 'Muay Live Show',
				url_point: 'single-listing-five.html',
				review: '15 reviews'
			}
			
			]

		};

			var mapOptions = {
				zoom: 13,
				center: new google.maps.LatLng(-23.696574, -46.567466),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
			};
			var marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'images/others/marker.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
				  closeInfoBox();
				  getInfoBox(item).open(mapObject, this);
				  mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
				 }));

	});

	new MarkerClusterer(mapObject, markers[key]);
	
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
	
	

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt=""/>' +
				'<span>'+ 
					'<em>'+ item.type_point +'</em>' +
					'<h3><a href="'+item.url_point+'">'+ item.name_point +'</a></h3>' +
					'<span class="infobox_rate">'+ item.rate +'</span>' +
					'<span class="btn_infobox_reviews">'+ item.review +'</span>' +
					'</span>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 92),
				closeBoxMargin: '',
				closeBoxURL: "images/others/close_infobox.png",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}

}




function bairro2() {
var mapProp= {
  center:new google.maps.LatLng(-23.701918, -46.572119,),
  zoom:20,
};
	(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);



		var
		mapObject,
		markers = [],
		markersData = {
			'Marker': [

 
			{
				type_point: 'SBC',
				name: 'SBC',
				location_latitude:  -23.701918,
				location_longitude: -46.572119,
				map_image_url: 'images/single-listing/gallery-6.jpg',
				rate: '4.5',
				name_point: 'Ocean Paradise',
				url_point: 'single-listing-one.html',
				review: '13 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.698811,

				location_longitude: -46.561939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.699411,

				location_longitude: -46.569939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
		
			
			{
				type_point: 'Event',
				name: 'Muay Live Show',
				location_latitude: -23.696574,
				location_longitude: -46.567466,   
				map_image_url: 'images/category/event/muay.jpg',
				rate: '4',
				name_point: 'Muay Live Show',
				url_point: 'single-listing-five.html',
				review: '15 reviews'
			}
			
			]

		};

			var mapOptions = {
				zoom: 20,
				center: new google.maps.LatLng(-23.696574, -46.567466),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
			};
			var marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'images/others/marker.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
				  closeInfoBox();
				  getInfoBox(item).open(mapObject, this);
				  mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
				 }));

	});

	new MarkerClusterer(mapObject, markers[key]);
	
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
	
	

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt=""/>' +
				'<span>'+ 
					'<em>'+ item.type_point +'</em>' +
					'<h3><a href="'+item.url_point+'">'+ item.name_point +'</a></h3>' +
					'<span class="infobox_rate">'+ item.rate +'</span>' +
					'<span class="btn_infobox_reviews">'+ item.review +'</span>' +
					'</span>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 92),
				closeBoxMargin: '',
				closeBoxURL: "images/others/close_infobox.png",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}

}


function bairroTodos() {
var mapProp= {
  center:new google.maps.LatLng(-23.701918, -46.572119,),
  zoom:5,
};
	(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);



		var
		mapObject,
		markers = [],
		markersData = {
			'Marker': [

 
			{
				type_point: 'SBC',
				name: 'SBC',
				location_latitude:  -23.701918,
				location_longitude: -46.572119,
				map_image_url: 'images/single-listing/gallery-6.jpg',
				rate: '4.5',
				name_point: 'Ocean Paradise',
				url_point: 'single-listing-one.html',
				review: '13 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.698811,

				location_longitude: -46.561939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
			{
				type_point: 'Travel',
				name: 'Lagon Theme Park',
				location_latitude: -23.699411,

				location_longitude: -46.569939,
				map_image_url: 'images/category/places/place-5.jpg',
				rate: '4',
				name_point: 'Lagon Theme Park',
				url_point: 'single-listing-one.html',
				review: '12 reviews'
			},
		
			
			{
				type_point: 'Event',
				name: 'Muay Live Show',
				location_latitude: -23.696574,
				location_longitude: -46.567466,   
				map_image_url: 'images/category/event/muay.jpg',
				rate: '4',
				name_point: 'Muay Live Show',
				url_point: 'single-listing-five.html',
				review: '15 reviews'
			}
			
			]

		};

			var mapOptions = {
				zoom: 5,
				center: new google.maps.LatLng(-23.696574, -46.567466),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
			};
			var marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'images/others/marker.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
				  closeInfoBox();
				  getInfoBox(item).open(mapObject, this);
				  mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
				 }));

	});

	new MarkerClusterer(mapObject, markers[key]);
	
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
	
	

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt=""/>' +
				'<span>'+ 
					'<em>'+ item.type_point +'</em>' +
					'<h3><a href="'+item.url_point+'">'+ item.name_point +'</a></h3>' +
					'<span class="infobox_rate">'+ item.rate +'</span>' +
					'<span class="btn_infobox_reviews">'+ item.review +'</span>' +
					'</span>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 92),
				closeBoxMargin: '',
				closeBoxURL: "images/others/close_infobox.png",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}

}

