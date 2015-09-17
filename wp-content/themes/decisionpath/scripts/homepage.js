$(document).ready(function() {
	// Homepage Feature plugin initialization
	var autoscrolling = true;
	
	$('#feature').featureFade().mouseover(function(){
		autoscrolling = false;
	}).mouseout(function(){
		autoscrolling = true;
	});
	
	rotator = setInterval(function(){
		if (autoscrolling){
			$('#feature').trigger('next');
		}
	}, 8000);
});