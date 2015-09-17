$(document).ready(function() {

	// homepage slider
	$("#slider").easySlider({
		auto: true, 
		continuous: true,
		numeric: true
	});
	// end homepage slider

	//Add/Remove Input Values
	$('input[title]').each(function() {
		if($(this).val() == '') {
			$(this).val($(this).attr('title'));	
		}
		
		$(this).focus(function() {
			if($(this).val() == $(this).attr('title')) {
				$(this).val('');	
			}
		});
		$(this).blur(function() {
			if($(this).val() == '') {
				$(this).val($(this).attr('title'));	
			}
		});
	});
	//End Add/Remove Input Values

	// striping 
	$("tbody.striped tr:odd").addClass("odd");
	$("tbody.striped tr:even").addClass("even");

	$("#team.striped div:odd").addClass("odd");

	// Striping


	$('#roleNav li:nth-child(1)').click(function(){
		$('#roleNav li:not(:nth-child(1))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(1)').toggleClass('on');
		$('#roleContainer div:nth-child(1)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(2)').click(function(){
		$('#roleNav li:not(:nth-child(2))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(2)').toggleClass('on');
		$('#roleContainer div:nth-child(2)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(3)').click(function(){
		$('#roleNav li:not(:nth-child(3))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(3)').toggleClass('on');
		$('#roleContainer div:nth-child(3)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(4)').click(function(){
		$('#roleNav li:not(:nth-child(4))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(4)').toggleClass('on');
		$('#roleContainer div:nth-child(4)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(5)').click(function(){
		$('#roleNav li:not(:nth-child(5))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(5)').toggleClass('on');
		$('#roleContainer div:nth-child(5)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(6)').click(function(){
		$('#roleNav li:not(:nth-child(6))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(6)').toggleClass('on');
		$('#roleContainer div:nth-child(6)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});
	
	$('#roleNav li:nth-child(7)').click(function(){
		$('#roleNav li:not(:nth-child(7))[class="on"]').removeClass('on');
		$('#roleNav li:nth-child(7)').toggleClass('on');
		$('#roleContainer div:nth-child(7)').toggle()
			.siblings('#roleContainer div:visible').toggle();
	});


	$('#industryNav li:nth-child(1)').click(function(){
		$('#industryNav li:not(:nth-child(1))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(1)').toggleClass('on');
		$('#industryContainer div:nth-child(1)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(2)').click(function(){
		$('#industryNav li:not(:nth-child(2))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(2)').toggleClass('on');
		$('#industryContainer div:nth-child(2)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(3)').click(function(){
		$('#industryNav li:not(:nth-child(3))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(3)').toggleClass('on');
		$('#industryContainer div:nth-child(3)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(4)').click(function(){
		$('#industryNav li:not(:nth-child(4))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(4)').toggleClass('on');
		$('#industryContainer div:nth-child(4)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(5)').click(function(){
		$('#industryNav li:not(:nth-child(5))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(5)').toggleClass('on');
		$('#industryContainer div:nth-child(5)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(6)').click(function(){
		$('#industryNav li:not(:nth-child(6))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(6)').toggleClass('on');
		$('#industryContainer div:nth-child(6)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});
	
	$('#industryNav li:nth-child(7)').click(function(){
		$('#industryNav li:not(:nth-child(7))[class="on"]').removeClass('on');
		$('#industryNav li:nth-child(7)').toggleClass('on');
		$('#industryContainer div:nth-child(7)').toggle()
			.siblings('#industryContainer div:visible').toggle();
	});


	// used code located here: http://www.learningjquery.com/2006/09/slicker-show-and-hide
	// hides the container as soon as the DOM is ready
	  $('#myRole ul, #myIndustry ul').hide();
	 // toggles the container on clicking the noted link  
	  $('#myRole h4.tab').click(function() {
		$('#myRole ul').toggle(400);
		return false;
	  });

	 // toggles the container on clicking the noted link  
	  $('#myIndustry h4.tab').click(function() {
		$('#myIndustry ul').toggle(400);
		return false;
	  });


		$("#clients").easySlider({
			auto: true, 
			continuous: true,
			numeric: true
		});


	$('area[rel*=facebox]').facebox() 
	$('a[rel*=facebox]').facebox({
		loadingImage : '/wp-content/themes/decisionpath/images/template/images/template/loading.gif',
		closeImage   : '/wp-content/themes/decisionpath/images/template/closelabel.png'
	})

});


