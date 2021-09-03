
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})


$(function () {
	var mapOptions = {
		zoom: 14, // 지도를 띄웠을 때의 줌 크기
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	
	var map = new google.maps.Map(document.getElementById("map-canvas"), // div의 id과 값이 같아야 함. "map-canvas"
				mapOptions);
	
	var size_x = 40; // 마커로 사용할 이미지의 가로 크기
	var size_y = 40; // 마커로 사용할 이미지의 세로 크기
	
	// 마커로 사용할 이미지 주소
	var image = new google.maps.MarkerImage( '마커주소',
								new google.maps.Size(size_x, size_y),
								'',
								'',
								new google.maps.Size(size_x, size_y));
	
	// 주소-좌표 변환 객체를 생성합니다
	var geocoder = new google.maps.Geocoder();
	
	// 주소로 좌표를 검색합니다
	geocoder.geocode( { 'address': "주소"}, function(results, status) {
		console.log(results);
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			marker = new google.maps.Marker({
							map: map,
							icon: image, // 마커로 사용할 이미지(변수)
							//title: '', // 마커에 마우스 포인트를 갖다댔을 때 뜨는 타이틀
							position: results[0].geometry.location
						});
			/*
			var content = ""; // 말풍선 안에 들어갈 내용
		
			// 마커를 클릭했을 때의 이벤트. 말풍선 뿅~
			var infowindow = new google.maps.InfoWindow({ content: content});
			google.maps.event.addListener(marker, "click", function() {infowindow.open(map,marker);});
			*/
		} else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	})

})
