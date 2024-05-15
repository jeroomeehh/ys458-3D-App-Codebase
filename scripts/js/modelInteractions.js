//adapted from example code 'benskitchen.com'

var animating = false;
var alternateTexture = false;
var wire = false;

function setTimerAttribute()
{
	document.getElementById('modelCoke__RotationTimer').setAttribute('enabled', animating.toString());
	document.getElementById('modelSprite__Bottle-TIMER').setAttribute('enabled', animating.toString());
	document.getElementById('modelSprite__Bottle_Cap-TIMER').setAttribute('enabled', animating.toString());
	document.getElementById('modelFanta__Fanta_Slim_Can-TIMER').setAttribute('enabled', animating.toString());
}

function startAnimation()
{
	animating = true;
	setTimerAttribute();
}

function stopAnimation()
{
	animating = false;
	setTimerAttribute();
}

function animateModel()
{
	animating = ! animating;
	setTimerAttribute();
}

function toggleWireframe(e)
{
	if (wire) {
		e.runtime.togglePoints(true);
		e.runtime.togglePoints(true);
		//e.material.setAttribute('emissiveColor', '1 0 0'); // Red wireframe for visibility
	} else {
		e.runtime.togglePoints(true);
		//e.material.setAttribute('emissiveColor', '0 0 0'); // Reset to no emissive color
	}
}

function wireframe()
{
	wire = !wire;
	var e = document.getElementById('modelCoke');
	toggleWireframe(e);
	e = document.getElementById('modelSprite');
	toggleWireframe(e);
	e = document.getElementById('modelFanta');
	toggleWireframe(e);
	
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('modelCoke__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('modelSprite__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('modelFanta__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('modelCoke__CameraFront').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraFront').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('modelCoke__CameraBack').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraBack').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('modelCoke__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('modelCoke__CameraRight').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraRight').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('modelCoke__CameraTop').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraTop').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('modelCoke__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('modelSprite__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('modelFanta__CameraBottom').setAttribute('bind', 'true');
}

function changeTexture() {
	alternateTexture = !alternateTexture;
	const textureUrlExt = alternateTexture ? '2.jpg' : '.jpg';
	var x3dModel = document.getElementById('coke_x3d');
	var textureNode = x3dModel.querySelector('ImageTexture');
	var newTextureUrl = './maps/coke_texture'+textureUrlExt;
	textureNode.setAttribute('url', newTextureUrl);

	x3dModel = document.getElementById('sprite_x3d');
	textureNode = x3dModel.querySelector('ImageTexture');
	newTextureUrl = './maps/sprite_texture'+textureUrlExt;
	textureNode.setAttribute('url', newTextureUrl);

	x3dModel = document.getElementById('fanta_x3d');
	textureNode = x3dModel.querySelector('ImageTexture');
	newTextureUrl = './maps/fanta_texture'+textureUrlExt;
	textureNode.setAttribute('url', newTextureUrl);
}
