<!--
  Copyright 2023 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
	<style>
		html,
		body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		#map-container {
			width: 100%;
			height: 100%;
			position: relative;
			font-family: "Roboto", sans-serif;
			box-sizing: border-box;
		}

		#map-container a {
			text-decoration: none;
			color: #1967d2;
		}

		#map-container button {
			background: none;
			color: inherit;
			border: none;
			padding: 0;
			font: inherit;
			font-size: inherit;
			cursor: pointer;
		}

		#gmp-map {
			position: absolute;
			left: 22em;
			top: 0;
			right: 0;
			bottom: 0;
		}

		.address {
			color: black;
		}

		#locations-panel {
			position: absolute;
			left: 0;
			width: 22em;
			top: 0;
			bottom: 0;
			overflow-y: auto;
			background: white;
			padding: 0.5em;
			box-sizing: border-box;
		}

		@media only screen and (max-width: 876px) {
			#gmp-map {
				left: 0;
				bottom: 40%; /* Menos espacio al mapa para dar más a la lista */
				height: 40%;
				width: 100%;
			}

			#locations-panel {
				top: 40%; /* Empieza antes */
				right: 0;
				width: 100%;
				bottom: 0;
				border-radius: 20px 20px 0 0; /* Efecto de "hoja" moderna */
				box-shadow: 0 -10px 20px rgba(0,0,0,0.1);
				z-index: 3;
			}
			
			#locations-panel-list > header {
				padding: 1.2em 1.2em 0.8em 1.2em;
			}

			#locations-panel-list .search-input input {
				height: 3.5em; /* Input más alto para mejor toque */
				font-size: 16px; /* Evita que iOS haga zoom automático al enfocar */
			}
		}

		#locations-panel-list > header {
			padding: 1.4em 1.4em 0 1.4em;
		}

		#locations-panel-list h1.search-title {
			font-size: 1em;
			font-weight: 500;
			margin: 0;
		}

		#locations-panel-list h1.search-title > img {
			vertical-align: bottom;
			margin-top: -1em;
		}

		#locations-panel-list .search-input {
			width: 100%;
			margin-top: 0.8em;
			position: relative;
		}

		#locations-panel-list .search-input input {
			width: 100%;
			border: 1px solid #80868b;
			border-radius: 0.3em;
			height: 2.7em;
			box-sizing: border-box;
			padding: 0 1em 0 2.5em;
			font-size: 0.9em;
		}

		#locations-panel-list .search-input input:focus {
			outline: 2px solid #1e88e5;
		}

		#locations-panel-list .search-input input::placeholder {
			color: #212121;
			opacity: 0.5;
		}

		#locations-panel-list .search-input-overlay {
			position: absolute;
		}

		#locations-panel-list .search-input-overlay.search {
			left: 2px;
			top: 2px;
			bottom: 2px;
			width: 2.4em;
		}

		#locations-panel-list .search-input-overlay.search button {
			width: 100%;
			height: 100%;
			border-radius: 0.2em;
			color: black;
			background: transparent;
		}

		#locations-panel-list .search-input-overlay.search .icon {
			margin-top: 0.15em;
			vertical-align: top;
			width: 0.9em;
		}

		#locations-panel-list .section-name {
			font-weight: 500;
			font-size: 0.9em;
			margin: 1.8em 0 1em 1.5em;
		}

		#locations-panel-list .location-result {
			position: relative;
			padding: 0.8em 3.5em 0.8em 1.4em;
			border-bottom: 1px solid rgba(0, 0, 0, 0.12);
			cursor: pointer;
			transition: background-color 0.2s ease;
		}
		
		.location-result:active {
			background-color: #f1f3f4;
		}

		#locations-panel-list .location-result:first-of-type {
			border-top: 1px solid rgba(0, 0, 0, 0.12);
		}

		#locations-panel-list .location-result:last-of-type {
			border-bottom: none;
		}

		#locations-panel-list .location-result.selected {
			outline: 2px solid #4285f4;
		}

		#locations-panel-list button.select-location {
			margin-bottom: 0.6em;
			text-align: left;
		}

		#locations-panel-list .location-result h2.name {
			font-size: 1em;
			font-weight: 500;
			margin: 0;
		}

		#locations-panel-list .location-result .address {
			font-size: 0.9em;
			margin-bottom: 0.5em;
		}

		#locations-panel-list .directions-button {
			position: absolute;
			right: 1.2em;
			top: 2.3em;
		}

		#locations-panel-list .directions-button-background:hover {
			fill: rgba(116,120,127,0.1);
		}

		#locations-panel-list .directions-button-background {
			fill: rgba(255,255,255,0.01);
		}

		#locations-panel-list .location-result .distance {
			position: absolute;
			top: 0.9em;
			right: 0.5em;
			text-align: right;
			font-size: 0.8em;
			width: 6em;
			color: #70757a;
		}

		#location-results-list {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		#map-legend {
			position: absolute;
			top: 10px;
			right: 10px;
			background: rgba(255, 255, 255, 0.95);
			backdrop-filter: blur(4px);
			padding: 12px 16px;
			border-radius: 12px;
			box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
			z-index: 2;
			display: flex;
			flex-direction: column;
			gap: 12px;
			border: 1px solid rgba(255, 255, 255, 0.2);
		}

		#map-legend h3 {
			margin: 0 0 4px 0;
			font-size: 11px;
			text-transform: uppercase;
			letter-spacing: 0.05em;
			color: #70757a;
			font-weight: 600;
		}

		.legend-item {
			display: flex;
			align-items: center;
			gap: 12px;
			white-space: nowrap;
		}

		.legend-item img {
			width: 24px;
			height: 24px;
			object-fit: contain;
			filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
		}

		.legend-item span {
			font-size: 13px;
			font-weight: 500;
			color: #3c4043;
		}

		@media only screen and (max-width: 876px) {
			#map-legend {
				top: 10px;
				bottom: auto;
				right: 20px;
				left: 20px;
				flex-direction: column; /* Cambiado a columna para 2 líneas */
				align-items: flex-start;
				padding: 10px 15px;
				font-size: 11px; /* Un poco más grande para legibilidad */
				z-index: 4;
				gap: 8px;
				width: fit-content;
				margin: 0 auto;
			}
			
			#map-legend h3 {
				display: none;
			}

			.legend-item {
				gap: 10px;
			}

			.legend-item img {
				width: 20px;
				height: 20px;
			}

			.legend-item span {
				font-size: 11px;
				white-space: nowrap;
			}
		}

		.type-badge {
			display: inline-block;
			padding: 2px 8px;
			border-radius: 4px;
			font-size: 10px;
			font-weight: 700;
			text-transform: uppercase;
			margin-top: 4px;
		}

		.badge-tienda {
			background: #ffebee;
			color: #c62828;
			border: 1px solid #ffcdd2;
		}

		.badge-distribuidor {
			background: #e3f2fd;
			color: #1565c0;
			border: 1px solid #bbdefb;
		}
	</style>
	<script>
		'use strict';

		/** Helper function to generate a Google Maps directions URL */
		function generateDirectionsURL(origin, destination) {
			const googleMapsUrlBase = 'https://www.google.com/maps/dir/?';
			const searchParams = new URLSearchParams('api=1');
			searchParams.append('origin', origin);
			const destinationParam = [];
			if (destination.title !== destination.address1) {
				destinationParam.push(destination.title);
			}
			destinationParam.push(destination.address1, destination.address2);
			searchParams.append('destination', destinationParam.join(','));
			return googleMapsUrlBase + searchParams.toString();
		}

		/**
		 * Defines an instance of the Locator+ solution, to be instantiated
		 * when the Maps library is loaded.
		 */
		function LocatorPlus(configuration) {
			const locator = this;

			locator.locations = configuration.locations || [];
			locator.capabilities = configuration.capabilities || {};

			const mapEl = document.getElementById('gmp-map');
			const panelEl = document.getElementById('locations-panel');
			locator.panelListEl = document.getElementById('locations-panel-list');
			const sectionNameEl =
				document.getElementById('location-results-section-name');
			const resultsContainerEl = document.getElementById('location-results-list');

			Handlebars.registerHelper('eq', function (a, b) {
				return a === b;
			});
			const itemsTemplate = Handlebars.compile(
				document.getElementById('locator-result-items-tmpl').innerHTML);

			locator.searchLocation = null;
			locator.searchLocationMarker = null;
			locator.selectedLocationIdx = null;
			locator.userCountry = null;

			// Initialize the map -------------------------------------------------------
			locator.map = new google.maps.Map(mapEl, configuration.mapOptions);
			const map = locator.map;

			const selectResultItem = function(locationIdx, panToMarker, scrollToResult) {
				locator.selectedLocationIdx = locationIdx;
				for (let locationElem of resultsContainerEl.children) {
					locationElem.classList.remove('selected');
					if (getResultIndex(locationElem) === locator.selectedLocationIdx) {
						locationElem.classList.add('selected');
						if (scrollToResult) {
							panelEl.scrollTop = locationElem.offsetTop;
						}
					}
				}
				if (panToMarker && (locationIdx != null)) {
					locator.map.panTo(locator.locations[locationIdx].coords);
				}
			};

			const markers = locator.locations.map(function(location, index) {
				const marker = new google.maps.Marker({
					position: location.coords,
					map: locator.map,
					title: location.title,
					icon: {
						url:location.icono,
						size:new google.maps.Size(32, 32),
					}
				});
				marker.addListener('click', function() {
					selectResultItem(index, false, true);
				});
				return marker;
			});

			const renderer = {
				render({ count, position }) {
                    const icon_tienda= "https://densoautopartes.com/img/pin_denso_tienda.png";
                    const icon_distribuidor= "https://densoautopartes.com/img/pin_denso_distribuidor.png";
                    var icon_display = "";
                    var dist = false;
                    var tc = false;
                    for (var i = 0; i < markers.length; i++) {
                        if (icon_tienda == markers[i].getIcon().url){
                            tc = true;
                        }
                        if (icon_distribuidor == markers[i].getIcon().url){
                            dist = true;
                        }

                        if (tc && dist){
                            icon_display = "https://densoautopartes.com/img/pin_cluster_3.png";
                        }else if (!tc && dist){
                            icon_display = "https://densoautopartes.com/img/pin_cluster_2.png"
                        }else if (tc && !dist){
                            icon_display = "https://densoautopartes.com/img/pin_cluster_1.png"
                        }
                    }

                    return new google.maps.Marker({
						label: { text: String(count), color: "black", fontSize: "14px" },
						position,
						icon: icon_display,
						zIndex: Number(google.maps.Marker.MAX_ZINDEX) + count,
					})
				}
			}

			new markerClusterer.MarkerClusterer({
                map: map,
                markers: markers,
                renderer: renderer,
            });

			locator.updateBounds = function() {
				const bounds = new google.maps.LatLngBounds();
				if (locator.searchLocationMarker) {
					bounds.extend(locator.searchLocationMarker.getPosition());
				}
				for (let i = 0; i < markers.length; i++) {
					bounds.extend(markers[i].getPosition());
				}
				locator.map.fitBounds(bounds);
			};
			if (locator.locations.length) {
				locator.updateBounds();
			}

			const getLocationDistance = function(location) {
				if (!locator.searchLocation) return null;
				if (location.travelDistanceValue != null) {
					return location.travelDistanceValue;
				}
				return google.maps.geometry.spherical.computeDistanceBetween(
					new google.maps.LatLng(location.coords),
					locator.searchLocation.location);
			};

			const getResultIndex = function(elem) {
				return parseInt(elem.getAttribute('data-location-index'));
			};

			locator.renderResultsList = function() {
				let locations = locator.locations.slice();
				for (let i = 0; i < locations.length; i++) {
					locations[i].index = i;
				}
				if (locator.searchLocation) {
					sectionNameEl.textContent = 'Nearest locations (' + locations.length + ')';
					locations.sort(function(a, b) {
						return getLocationDistance(a) - getLocationDistance(b);
					});
				} else {
					sectionNameEl.textContent = `All locations (${locations.length})`;
				}
				const resultItemContext = {locations: locations};
				resultsContainerEl.innerHTML = itemsTemplate(resultItemContext);
				for (let item of resultsContainerEl.children) {
					const resultIndex = getResultIndex(item);
					if (resultIndex === locator.selectedLocationIdx) {
						item.classList.add('selected');
					}

					const resultSelectionHandler = function() {
						if (resultIndex !== locator.selectedLocationIdx) {
							selectResultItem(resultIndex, true, false);
						}
					};

					item.addEventListener('click', resultSelectionHandler);
					item.querySelector('.select-location')
						.addEventListener('click', function(e) {
							resultSelectionHandler();
							e.stopPropagation();
						});

					const origin = (locator.searchLocation != null) ?
						locator.searchLocation.location :
						'';
					const destination = locator.locations[resultIndex];
					const googleMapsUrl = generateDirectionsURL(origin, destination);
					item.querySelector('.directions-button')
						.setAttribute('href', googleMapsUrl);
				}
			};

			initializeSearchInput(locator);
			initializeDistanceMatrix(locator);
			locator.renderResultsList();
		}

		function initializeSearchInput(locator) {
			const geocodeCache = new Map();
			const geocoder = new google.maps.Geocoder();
			const searchInputEl = document.getElementById('location-search-input');
			const searchButtonEl = document.getElementById('location-search-button');

			const updateSearchLocation = function(address, location) {
				if (locator.searchLocationMarker) {
					locator.searchLocationMarker.setMap(null);
				}
				if (!location) {
					locator.searchLocation = null;
					return;
				}
				locator.searchLocation = {'address': address, 'location': location};
				locator.searchLocationMarker = new google.maps.Marker({
					position: location,
					map: locator.map,
					title: 'My location',
					icon: {
						path: google.maps.SymbolPath.CIRCLE,
						scale: 12,
						fillColor: '#3367D6',
						fillOpacity: 0.5,
						strokeOpacity: 0,
					}
				});

				const addressParts = address.split(' ');
				locator.userCountry = addressParts[addressParts.length - 1];
				locator.updateBounds();
				locator.renderResultsList();
				locator.updateTravelTimes();
			};

			const geocodeSearch = function(query) {
				if (!query) return;
				const handleResult = function(geocodeResult) {
					searchInputEl.value = geocodeResult.formatted_address;
					updateSearchLocation(geocodeResult.formatted_address, geocodeResult.geometry.location);
				};

				if (geocodeCache.has(query)) {
					handleResult(geocodeCache.get(query));
					return;
				}
				const request = {address: query, bounds: locator.map.getBounds()};
				geocoder.geocode(request, function(results, status) {
					if (status === 'OK' && results.length > 0) {
						const result = results[0];
						geocodeCache.set(query, result);
						handleResult(result);
					}
				});
			};

			searchButtonEl.addEventListener('click', function() {
				geocodeSearch(searchInputEl.value.trim());
			});

			initializeSearchInputAutocomplete(locator, searchInputEl, geocodeSearch, updateSearchLocation);
		}

		function initializeSearchInputAutocomplete(locator, searchInputEl, fallbackSearch, searchLocationUpdater) {
			const autocomplete = new google.maps.places.Autocomplete(searchInputEl, {
				types: ['geocode'],
				fields: ['place_id', 'formatted_address', 'geometry.location']
			});
			autocomplete.bindTo('bounds', locator.map);
			autocomplete.addListener('place_changed', function() {
				const placeResult = autocomplete.getPlace();
				if (!placeResult.geometry) {
					fallbackSearch(placeResult.name);
					return;
				}
				searchLocationUpdater(placeResult.formatted_address, placeResult.geometry.location);
			});
		}

		function initializeDistanceMatrix(locator) {
			const distanceMatrixService = new google.maps.DistanceMatrixService();
			locator.updateTravelTimes = function() {
				if (!locator.searchLocation) return;
				const units = (locator.userCountry === 'USA') ?
					google.maps.UnitSystem.IMPERIAL :
					google.maps.UnitSystem.METRIC;
				const request = {
					origins: [locator.searchLocation.location],
					destinations: locator.locations.map(function(x) { return x.coords; }),
					travelMode: google.maps.TravelMode.DRIVING,
					unitSystem: units,
				};
				const callback = function(response, status) {
					if (status === 'OK') {
						const distances = response.rows[0].elements;
						for (let i = 0; i < distances.length; i++) {
							const distResult = distances[i];
							let travelDistanceText, travelDistanceValue;
							if (distResult.status === 'OK') {
								travelDistanceText = distResult.distance.text;
								travelDistanceValue = distResult.distance.value;
							}
							const location = locator.locations[i];
							location.travelDistanceText = travelDistanceText;
							location.travelDistanceValue = travelDistanceValue;
						}
						locator.renderResultsList();
					}
				};
				distanceMatrixService.getDistanceMatrix(request, callback);
			};
		}
	</script>
	<script>
		const CONFIGURATION = {
			"locations": [
				<?php foreach ($tiendas_certificadas as $tienda){?>
				{"tipo":"tienda","icono":"https://densoautopartes.com/img/pin_denso_tienda.png","title":"<?= $tienda['DistribuidoresCertificado']['nombre']?>","address1":"<?= $tienda['DistribuidoresCertificado']['direccion']?>","address2":"<?= $tienda['DistribuidoresCertificado']['zona'].", ".$tienda['DistribuidoresCertificado']['ciudad']?>","address3":"<?= $tienda['DistribuidoresCertificado']['telefono']?>","coords":{"lat":<?= explode(",",$tienda['DistribuidoresCertificado']['coordenadas'])[0]?>,"lng":<?= explode(",",$tienda['DistribuidoresCertificado']['coordenadas'])[1]?>}},
				<?php }
				foreach ($distribuidores_marca as $dist){?>
				{"tipo":"distribuidor","icono":"https://densoautopartes.com/img/pin_denso_distribuidor.png","title":"<?= $dist['Distribuidor']['nombre']?>","address1":"<?= $dist['Distribuidor']['direccion']?>","address2":"<?= $dist['Distribuidor']['ciudad']?>","address3":"<?= $dist['Distribuidor']['telefono']?>","coords":{"lat":<?= explode(",",$dist['Distribuidor']['coordenadas'])[0]?>,"lng":<?= explode(",",$dist['Distribuidor']['coordenadas'])[1]?>}},
				<?php }?>
			],
			"mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
			"mapsApiKey": "AIzaSyBtRpRVF5CuZISLN6umwOCv4gxxsw8loP8",
			"capabilities": {"input":true,"autocomplete":true,"directions":false,"distanceMatrix":true,"details":false,"actions":false}
		};

		function initMap() {
			new LocatorPlus(CONFIGURATION);
		}
	</script>
	<script id="locator-result-items-tmpl" type="text/x-handlebars-template">
		{{#each locations}}
		<li class="location-result" data-location-index="{{index}}">
			<button class="select-location">
				<h2 class="name">
					<img src="{{icono}}" style="width: 20px; vertical-align: middle; margin-right: 8px;" alt="">
					{{title}}
				</h2>
				{{#if (eq tipo "tienda")}}
					<div class="type-badge badge-tienda">Tienda Oficial</div>
				{{else}}
					<div class="type-badge badge-distribuidor">Distribuidor Mayorista</div>
				{{/if}}
			</button>
			<div class="address">{{address1}}<br>{{address2}}</div>
			{{#if travelDistanceText}}
			<div class="distance">{{travelDistanceText}}</div>
			{{/if}}
			<a class="directions-button" href="" target="_blank" title="Get directions to this location on Google Maps">
				<svg width="34" height="34" viewBox="0 0 34 34"
					 fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.5867 9.24375L17.9403 8.8902V8.8902L17.5867 9.24375ZM16.4117 9.24375L16.7653 9.59731L16.7675 9.59502L16.4117 9.24375ZM8.91172 16.7437L8.55817 16.3902L8.91172 16.7437ZM8.91172 17.9229L8.55817 18.2765L8.55826 18.2766L8.91172 17.9229ZM16.4117 25.4187H16.9117V25.2116L16.7652 25.0651L16.4117 25.4187ZM16.4117 25.4229H15.9117V25.63L16.0582 25.7765L16.4117 25.4229ZM25.0909 17.9229L25.4444 18.2765L25.4467 18.2742L25.0909 17.9229ZM25.4403 16.3902L17.9403 8.8902L17.2332 9.5973L24.7332 17.0973L25.4403 16.3902ZM17.9403 8.8902C17.4213 8.3712 16.5737 8.3679 16.0559 8.89248L16.7675 9.59502C16.8914 9.4696 17.1022 9.4663 17.2332 9.5973L17.9403 8.8902ZM16.0582 8.8902L8.55817 16.3902L9.26527 17.0973L16.7653 9.5973L16.0582 8.8902ZM8.55817 16.3902C8.0379 16.9105 8.0379 17.7562 8.55817 18.2765L9.26527 17.5694C9.13553 17.4396 9.13553 17.227 9.26527 17.0973L8.55817 16.3902ZM8.55826 18.2766L16.0583 25.7724L16.7652 25.0651L9.26517 17.5693L8.55826 18.2766ZM15.9117 25.4187V25.4229H16.9117V25.4187H15.9117ZM16.0582 25.7765C16.5784 26.2967 17.4242 26.2967 17.9444 25.7765L17.2373 25.0694C17.1076 25.1991 16.895 25.1991 16.7653 25.0694L16.0582 25.7765ZM17.9444 25.7765L25.4444 18.2765L24.7373 17.5694L17.2373 25.0694L17.9444 25.7765ZM25.4467 18.2742C25.9631 17.7512 25.9663 16.9096 25.438 16.3879L24.7354 17.0995C24.8655 17.2279 24.8687 17.4363 24.7351 17.5716L25.4467 18.2742Z" fill="#1967d2"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19 19.8333V17.75H15.6667V20.25H14V16.9167C14 16.4542 14.3708 16.0833 14.8333 16.0833H19V14L21.9167 16.9167L19 19.8333Z" fill="#1967d2"/>
					<circle class="directions-button-background" cx="17" cy="17" r="16.5" stroke="#e0e0e0"/>
				</svg>
			</a>
		</li>
		{{/each}}
	</script>

<div id="map-container">
	<div id="locations-panel">
		<div id="locations-panel-list">
			<header>
				<h1 class="search-title">
					<img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v15/24px.svg"/>
					<?= $region == 'co' ? "Encontrar Tienda Certificada" : "Encontrar Distribuidor DENSO"?>
				</h1>
				<div class="search-input">
					<input id="location-search-input" placeholder="Enter your address or zip code">
					<div id="search-overlay-search" class="search-input-overlay search">
						<button id="location-search-button">
							<img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/search/v11/24px.svg" alt="Search"/>
						</button>
					</div>
				</div>
			</header>
			<div class="section-name" id="location-results-section-name">
				Todos los resultados
			</div>
			<div class="results">
				<ul id="location-results-list"></ul>
			</div>
		</div>
	</div>
	<div id="map-legend">
		<h3>Leyenda</h3>
		<div class="legend-item">
			<img src="https://densoautopartes.com/img/pin_denso_tienda.png" alt="Tienda">
			<span>Tiendas con Productos Oficiales</span>
		</div>
		<div class="legend-item">
			<img src="https://densoautopartes.com/img/pin_denso_distribuidor.png" alt="Distribuidor">
			<span>Distribuidores Mayoristas</span>
		</div>
	</div>
	<div id="gmp-map"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRpRVF5CuZISLN6umwOCv4gxxsw8loP8&callback=initMap&libraries=places,geometry&solution_channel=GMP_QB_locatorplus_v7_cABD" async defer></script>