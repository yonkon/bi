<div class="yandexmaps-map-wrapper">
	<div id="tv{$tv->id}YaMap" class="yandexmaps-map"></div>
	<!--div class="yandexmaps-marker"></div-->
</div>

<input type="text" id="tv{$tv->id}" name="tv{$tv->id}" value="{$tv->value}" class="textfield"  />

<script type="text/javascript">
// <![CDATA[
{literal}
Ext.onReady(function(){
	var fld = MODx.load({
		{/literal}
		xtype: 'textfield'
		,applyTo: 'tv{$tv->id}'
		,width: '99%'
		,id: 'tv{$tv->id}'
		,enableKeyEvents: true
		,allowBlank: true
		,value: '{$tv->value}'
		{literal}
		,listeners: { 'change': { fn:MODx.fireResourceFormChange, scope:this}}
	});
	Ext.getCmp('modx-panel-resource').getForm().add(fld);
	MODx.makeDroppable(fld);
});
{/literal}
// ]]>
</script>


<script type="text/javascript">
// <![CDATA[
{literal}
Ext.onReady(function(){
	{/literal}
	var myPlacemark,
		coords{$tv->id}YaMap = [ {$tv->value} ],
		coordsCenter{$tv->id}YaMap = [ {$tv->value} ];
	
	if(coordsCenter{$tv->id}YaMap.length == 0) {
		var coordsCenter{$tv->id}YaMap = [ 47.105278, 51.909903 ];
	}
	
	{literal}
	ymaps.ready()
	.done(function (ymaps) {
		
		var {/literal}myYandexMap{$tv->id}{literal} = new ymaps.Map('{/literal}tv{$tv->id}YaMap{literal}', {
			center: {/literal}coordsCenter{$tv->id}YaMap{literal}
			, zoom: 14
			, controls: [ 'smallMapDefaultSet' ]
		});
		
		/* >> Вставляем форму поиска выше нашей карты
		var searchForm = $([
		'<form id="yandexmaps-search-form">',
		'<input type="text" class="yandexmaps-form-text" placeholder="Поиск на карте" value="" />',
		'<input type="submit" class="yandexmaps-form-submit" value="Найти"/>',
		'</form>'].join(''));
		
		searchForm.bind('submit', function (e) {
			alert( 'ok' );
			
			e.preventDefault();
		});
		
		searchForm.insertBefore('#{/literal}tv{$tv->id}YaMap{literal}' );
		// << Вставляем форму поиска выше нашей карты*/
		
		
		// >> В случае установленных координат в TV поле ставим метку без клика
		if({/literal}coords{$tv->id}YaMap.length{literal} != 0) {
			setPlacemark({/literal}coords{$tv->id}YaMap{literal});
		}
		// << В случае установленных координат в TV поле ставим метку без клика
		
		
		// >> Слушаем клик на карте
		{/literal}myYandexMap{$tv->id}{literal}.events.add('click', function (e) {
			var coords = e.get('coords');
			
			setPlacemark(coords);
		});
		// << Слушаем клик на карте
		
		
		// >> Ставим метку
		function setPlacemark(coords) {
			// Если метка уже создана – просто передвигаем ее
			if(myPlacemark) {
				myPlacemark.geometry.setCoordinates(coords);
			}
			// Если нет – создаем
			else {
				myPlacemark = createPlacemark(coords);
				{/literal}myYandexMap{$tv->id}{literal}.geoObjects.add(myPlacemark);
				// Слушаем событие окончания перетаскивания на метке
				myPlacemark.events.add('dragend', function () {
					getAddress(myPlacemark.geometry.getCoordinates());
				});
			}
			getAddress(coords);
		}
		// << Ставим метку
		
		
		// >> Создание метки
		function createPlacemark(coords) {
			return new ymaps.Placemark(coords, {
				iconContent: 'Ищем адрес..'
			}, {
				preset: 'islands#redStretchyIcon',
				draggable: true
			});
		}
		// << Создание метки
		
		
		// >> Определяем адрес по координатам (обратное геокодирование) + вставляем координаты в TV поле
		function getAddress(coords) {
			myPlacemark.properties.set('iconContent', 'Ищем адрес..');
			ymaps.geocode(coords).then(function (res) {
				var firstGeoObject = res.geoObjects.get(0);
				
				myPlacemark.properties
					.set({
						iconContent: firstGeoObject.properties.get('name'),
						balloonContent: firstGeoObject.properties.get('text')
					});
			});
			
			$('#{/literal}tv{$tv->id}{literal}').val( coords );
		}
		// << Определяем адрес по координатам (обратное геокодирование) + вставляем координаты в TV поле
		
	});
	
});
{/literal}
// ]]>
</script>