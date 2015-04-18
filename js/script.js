$(function(){
	$(".container").mapael({
		map : {
				name : "world_countries",
				zoom: {
				enabled: true,
				maxLevel : 10,
				},
				defaultArea: {
					attrs : {
                    fill : "#fff",
                    stroke: "#030303",
					},
					attrsHover: {
					fill: "#fff",
					stroke: "#5d5d5d",
					"stroke-width": 1,
					"stroke-linejoin": "round"
					},
				},		
			}
		});
	
		var city=$('#cityname').val();
		var lat='';
		var lng='';
		$("#find").click(function(event){
			$(".result").hide();
			if($('#cityname').val() !=""){
			event.preventDefault();
			var city =toTitleCase($('#cityname').val());
			$.ajax({
				dataType:"json",
				async: false,
				url:"http://maps.google.com/maps/api/geocode/json?",
				data: "address="+city,
				success:function(results) {
					$.each(results, function (i, item) {
					lat=item[0].geometry.location.lat;
					lng=item[0].geometry.location.lng;
					return false;
					});
				}
			});
			
			$.get("scraper.php",{"city":$('#cityname').val()}, function(data){
			if (data=="") {
				$("#fail").fadeIn();
				return false;
			} else {
				$("#success").html(data).fadeIn();
				callMapael(city, lat, lng);
			}
			}).fail(function() {
				$("#fail").fadeIn();
				return false;
			});
			} else{
				$("#noCity").fadeIn();
				return false;
			}		
		});
	
		function toTitleCase(str) {
			return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
		
		function callMapael(city, lat, lng){
			$(".container").mapael({
			map : {
				name : "world_countries",
				zoom: {
				enabled: true,
				maxLevel : 10
				},
				defaultArea: {
					attrs : {
                    fill : "#fff",
                    stroke: "#030303",
					},
					attrsHover: {
					fill: "#fff",
					stroke: "#5d5d5d",
					"stroke-width": 1,
					"stroke-linejoin": "round"
					},
					text : {
						attrs : {
						fill : "#FFBD54"
						}
						, attrsHover : {
						fill : "#000"
						}
					}
				},		
			}
			});	
			var newPlots = {
				city : {
					type :"square",
					size :5,
					latitude : '',
					longitude : '',
					attrs:{
						fill:"#0088db"
					},
					text : {
					content : city, 
					attrs : {
						fill : "#5FCF80"
					}
					, attrsHover : {
						fill : "#000"
					}},
				}
			}
        newPlots.city.latitude=lat;
		newPlots.city.longitude=lng;
		$(".container").trigger('update', [{}, newPlots,{animDuration : 300}]);
		$(".container").trigger('zoom', {level : 4, latitude : lat, longitude : lng});		
		}		
	});
