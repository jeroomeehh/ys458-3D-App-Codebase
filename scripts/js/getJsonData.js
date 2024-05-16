// JavaScript Document
$(document).ready(function(){
	
	//AJAX service request to get the model text data using PHP scripting to access data from database 
	$.getJSON('./index.php/apiGetData', function(jsonModel3D) {
		console.log(jsonModel3D);
			//Get the coke main text data
			$('#x3dModelTitle_coke').html('<h2>' + jsonModel3D[0].x3dModelTitle + '<h2>');
			$('#x3dCreationMethod_coke').html('<p>' + jsonModel3D[0].x3dCreationMethod + '<p>');
			$('#title_coke').html('<h2>' + jsonModel3D[0].modelTitle + '<h2>');
			$('#subTitle_coke').html('<h3>' + jsonModel3D[0].modelSubtitle + '</h3>');
			$('#description_coke').html('<p>' + jsonModel3D[0].modelDescription + '</p>');
		
			//Get the sprite main text data
			$('#x3dModelTitle_sprite').html('<h2>' + jsonModel3D[1].x3dModelTitle + '<h2>');
			$('#x3dCreationMethod_sprite').html('<p>' + jsonModel3D[1].x3dCreationMethod + '<p>');
			$('#title_sprite').html('<h2>' + jsonModel3D[1].modelTitle + '<h2>');
			$('#subTitle_sprite').html('<h3>' + jsonModel3D[1].modelSubtitle + '</h3>');
			$('#description_sprite').html('<p>' + jsonModel3D[1].modelDescription + '</p>');		

			//Get the fanta main text data
			$('#x3dModelTitle_fanta').html('<h2>' + jsonModel3D[2].x3dModelTitle + '<h2>');
			$('#x3dCreationMethod_fanta').html('<p>' + jsonModel3D[2].x3dCreationMethod + '<p>');
			$('#title_fanta').html('<h2>' + jsonModel3D[2].modelTitle + '<h2>');
			$('#subTitle_fanta').html('<h3>' + jsonModel3D[2].modelSubtitle + '</h3>');
			$('#description_fanta').html('<p>' + jsonModel3D[2].modelDescription + '</p>');
	});

	 //AJAX service request to get the main text data using PHP scripting to access data from database 
	 $.getJSON('./index.php/apiGetPageData', function(jsonObj) {
		console.log(jsonObj);
		//Get the home page main text data
		$('#title_home').html('<h2>' + jsonObj[0].title + '<h2>');
		$('#subTitle_home').html('<h3>' + jsonObj[0].subtitle + '</h3>');
		$('#description_home').html('<p>' + jsonObj[0].description + '</p>');
		
         //Get the home page left column text data
		$('#title_left').html('<h2>' + jsonObj[1].title + '<h2>');
		$('#subTitle_left').html('<h3>' + jsonObj[1].subtitle + '</h3>');
		$('#description_left').html('<p>' + jsonObj[1].description + '</p>');	
		
		//Get the home page centre column text data
		$('#title_centre').html('<h2>' + jsonObj[2].title + '<h2>');
		$('#subTitle_centre').html('<h3>' + jsonObj[2].subtitle + '</h3>');
		$('#description_centre').html('<p>' + jsonObj[2].description + '</p>');	
		
		//Get the home page right column text data
		$('#title_right').html('<h2>' + jsonObj[3].title + '<h2>');
		$('#subTitle_right').html('<h3>' + jsonObj[3].subtitle + '</h3>');
		$('#description_right').html('<p>' + jsonObj[3].description + '</p>');			
	  
		//Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj[4].title + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj[4].description + '</p>');

		//Get the video contents data
		$('.title_video').html('<h2>' + jsonObj[5].title + '<h2>');
		$('.description_video').html('<p>' + jsonObj[5].description + '</p>');

		//Get camera contents data
		$('#x3dCameraTitle').html(jsonObj[6].title);
		$('#x3dCameraSubtitle').html('<p>' + jsonObj[6].description + '<p');

		//Get render contents data
		$('#x3dRenderTitle').html(jsonObj[7].title);
		$('#x3dRenderSubtitle').html('<p>' + jsonObj[7].description + '<p');

		//Get animation contents data
		$('#x3dAnimationTitle').html(jsonObj[8].title);
		$('#x3dAnimationSubtitle').html('<p>' + jsonObj[8].description + '<p');

	 });
});








