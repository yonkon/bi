<script type="text/javascript">
if(typeof jQuery == "undefined"){
	document.write('<script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js" ></'+'script>');
}

if(typeof ymaps == "undefined"){
	//document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU" ></'+'script>');
	document.write('<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map,Placemark,GeoObjectCollection,map.addon.balloon,geoObject.addon.balloon,package.controls" ></'+'script>');
}
</script>


<div id="[[+idMap]]" style="[[+styleMapBlock]]" class="[[+classMapBlock]]"></div>

[[+filtersFormItems:notempty=`<div class="[[+classFiltersBlock]]" style="[[+styleFiltersBlock]]">
	<form id="[[+idFiltersForm]]" class="ymFiltersForm" action="[[~[[*id]]?scheme=`full`]]" method="POST">
		[[+filtersFormItems]]
		<div class="loader"></div>
	</form>
</div>`]]

<div style="clear:both"></div>


<script type="text/javascript">
var ymFormId = '#[[+idFiltersForm]]';
var ymFormAction = $(ymFormId).attr('action');

ymaps.ready()
	.done(function (ymaps) {
		var mapCenter[[+idMap]] = [[+centerCoords]],
			myMap[[+idMap]] = new ymaps.Map('[[+idMap]]', {
				center: mapCenter[[+idMap]],
				zoom: [[+zoom]],
				controls: ['zoomControl']
			}),
			placemarks = [];
		
		myMap[[+idMap]].controls.add(new ymaps.control.TypeSelector({options: { position: { left: 10, top: 10 }}}));
		
		
		$.getJSON( ymFormAction , "ymJSON=1" ).done( function (json) {
			window.geoObjects = ymaps.geoQuery(json);
			window.clusters = geoObjects.search("geometry.type == 'Point'").clusterize({preset: 'islands#invertedVioletClusterIcons'});
			myMap[[+idMap]].geoObjects.add(clusters);
			/*.addToMap(myMap[[+idMap]])*/
			geoObjects.applyBoundsToMap(myMap[[+idMap]], {
				checkZoomRange: true
			});
		});
		
		
		[[+filtersFormItems:notempty=`
		$(".[[+classFiltersItem]]").click(function() {
			var thisItem = this;
			var filtersItemId = $(this).attr('id'); // id кликнутого элемента
			
			$(ymFormId).find('.loader').show(); // покажем лоадер
			
			// >> Если нужно скрыть элементы
			if( $(thisItem).hasClass('ymFiltersItemHide') )
			{
				$(ymFormId).find('#checkbox_' + filtersItemId).val('0'); // ставим input[type=hidden] - val
				$(thisItem).removeClass('ymFiltersItemHide').addClass('ymFiltersItemShow'); // ставим нужный класс
				
				// >> Собираем строку из формы для передачи аяксом
				var ymFormData = $(ymFormId).serializeArray(), ymFormDataString = '';
				
				$.each(ymFormData, function(i_1, val_1) {
					$.each(val_1, function(i_2, val_2) {
						if(i_2 == 'name') {
							ymFormDataString += val_2 + '=';
						} else if(i_2 == 'value') {
							ymFormDataString += val_2 + '&';
						}
					});
				});
				// << Собираем строку из формы для передачи аяксом
				
				//alert( ymFormDataString );
				
				$.getJSON( ymFormAction , ymFormDataString )
					.done( function (json) {
						/*window.geoObjects2 = ymaps.geoQuery(json)
							.addToMap(myMap[[+idMap]])
							.applyBoundsToMap(myMap[[+idMap]], {
								checkZoomRange: true
							});*/
						
						window.geoObjects2 = ymaps.geoQuery(json);
						window.clusters2 = geoObjects2.search("geometry.type == 'Point'").clusterize();
						myMap[[+idMap]].geoObjects.add(clusters2);
						/*.addToMap(myMap[[+idMap]])*/
						geoObjects2.applyBoundsToMap(myMap[[+idMap]], {
							checkZoomRange: true
						});
						
						geoObjects.remove(geoObjects2).removeFromMap(myMap[[+idMap]]); // удаляем текущие объекты с карты
						myMap[[+idMap]].geoObjects.remove(clusters);
						geoObjects = geoObjects2; // колдуем
						clusters = clusters2; // колдуем
						geoObjects2=''; // колдуем
						clusters2=''; // колдуем
						
						$(ymFormId).find('.loader').hide(); // спрячем лоадер
						$(thisItem).parent().find('.ymFiltersWrapper').slideUp(); // прячем подпункты, если есть..
					});
			} // << Если нужно скрыть элементы
			else
			{ // >> Если нужно показать элементы
				$(ymFormId).find('#checkbox_' + filtersItemId).val('1'); // ставим input[type=hidden] - val
				$(thisItem).removeClass('ymFiltersItemShow').addClass('ymFiltersItemHide'); // ставим нужный класс
				
				// >> Собираем строку из формы для передачи аяксом
				var ymFormData = $(ymFormId).serializeArray(), ymFormDataString = '';
				
				$.each(ymFormData, function(i_1, val_1) {
					$.each(val_1, function(i_2, val_2) {
						if(i_2 == 'name') {
							ymFormDataString += val_2 + '=';
						} else if(i_2 == 'value') {
							ymFormDataString += val_2 + '&';
						}
					});
				});
				// << Собираем строку из формы для передачи аяксом
				
				$.getJSON( ymFormAction , ymFormDataString )
					.done( function (json) {
						/*window.geoObjects2 = ymaps.geoQuery(json)
							.addToMap(myMap[[+idMap]])
							.applyBoundsToMap(myMap[[+idMap]], {
								checkZoomRange: true
							});*/
						
						window.geoObjects2 = ymaps.geoQuery(json);
						window.clusters2 = geoObjects2.search("geometry.type == 'Point'").clusterize();
						myMap[[+idMap]].geoObjects.add(clusters2);
						/*.addToMap(myMap[[+idMap]])*/
						geoObjects2.applyBoundsToMap(myMap[[+idMap]], {
							checkZoomRange: true
						});
						
						geoObjects.remove(geoObjects2).removeFromMap(myMap[[+idMap]]); // удаляем текущие объекты с карты
						myMap[[+idMap]].geoObjects.remove(clusters);
						geoObjects = geoObjects2; // колдуем
						clusters = clusters2; // колдуем
						geoObjects2=''; // колдуем
						clusters2=''; // колдуем
						
						$(ymFormId).find('.loader').hide(); // спрячем лоадер
						$(thisItem).parent().find('.ymFiltersWrapper').slideDown(); // покажем подпункты, если есть..
					});
			}
			// << Если нужно показать элементы
		});
		`]]
	});
</script>