// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#fantaDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#fantaDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#fantaDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#fantaDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#navCoke').addClass('active');
			$('#navSprite').removeClass('active');
			$('#navPepper').removeClass('active');
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#navCoke').removeClass('active');
			$('#navSprite').addClass('active');
			$('#navPepper').removeClass('active');
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#navCoke').removeClass('active');
			$('#navSprite').removeClass('active');
			$('#navPepper').addClass('active');
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		}); 
	}
});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(173, 216, 230, 1)'; // lightblue
			document.getElementById('headerColor').style.backgroundColor = 'rgba(255, 0, 0, 0.8)'; // red with opacity
			document.getElementById('footerColor').style.backgroundColor = 'rgba(255, 153, 0, 0.8)'; // amber with opacity
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(255, 102, 0, 1)'; // dark orange
			document.getElementById('headerColor').style.backgroundColor = 'rgba(255, 153, 153, 0.8)'; // light pink with opacity
			document.getElementById('footerColor').style.backgroundColor = 'rgba(153, 102, 153, 0.8)'; // plum with opacity
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(255, 127, 80, 1)'; // coral
			document.getElementById('headerColor').style.backgroundColor = 'rgba(0, 139, 139, 0.8)'; // dark cyan with opacity
			document.getElementById('footerColor').style.backgroundColor = 'rgba(233, 150, 122, 0.8)'; // dark salmon with opacity corrected spelling
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(211, 211, 211, 1)'; // light grey
			document.getElementById('headerColor').style.backgroundColor = 'rgba(210, 105, 30, 0.8)'; // chocolate with opacity
			document.getElementById('footerColor').style.backgroundColor = 'rgba(105, 105, 105, 0.8)'; // dim grey with opacity
			break;
	}

}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(0,0,0,0.8)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(200,200,200,0.8)';
}

function selectCoke() {
	$('#navCoke').addClass('active');
	$('#navSprite').removeClass('active');
	$('#navFanta').removeClass('active');
	$('#coke').show();
	$('#sprite').hide();
	$('#fanta').hide();
	$('#interaction').show(); 
	$('#cokeDescription').show();
	$('#spriteDescription').hide(); 
	$('#fantaDescription').hide(); 
}

function selectSprite() {
	$('#navCoke').removeClass('active');
	$('#navSprite').addClass('active');
	$('#navFanta').removeClass('active');
	$('#coke').hide();
	$('#sprite').show();
	$('#fanta').hide();
	$('#interaction').show(); 
	$('#cokeDescription').hide();
	$('#spriteDescription').show();
	$('#fantaDescription').hide();  	  	  
}

function selectFanta() {
	$('#navCoke').removeClass('active');
	$('#navSprite').removeClass('active');
	$('#navFanta').addClass('active');
	$('#coke').hide();
	$('#sprite').hide();
	$('#fanta').show();
	$('#interaction').show(); 
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#fantaDescription').show(); 	  
}

function Texture1() {
	alternateTexture = true;
	changeTexture();
}

function Texture2() {
	alternateTexture = false;
	changeTexture();
}

function select_coke1() {
	selectCoke();
	Texture1();
}

function select_coke2() {
	selectCoke();
	Texture2();
}

function select_sprite1() {
	selectSprite();
	Texture1();
}

function select_sprite2() {
	selectSprite();
	Texture2();
}

function select_fanta1() {
	selectFanta();
	Texture1();
}

function select_fanta2() {
	selectFanta();
	Texture2();
}



