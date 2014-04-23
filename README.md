Space Invaders
==============

The classic Space Invaders game written in JavaScript as a learning exercise.


See it Live: http://www.maestrographics.net/space

![Space Invaders Screenshot](http://www.maestrographics.net/space/screenshot.jpg "Space Invaders Screenshot")

Intro
-----

What's there to say? It's Space Invaders in JavaScript! Create the game, give it a 
div to draw to, tell it when the keyboard is mashed and that's all you need to 
add Space Invaders to a website.

Adding Space Invaders to a Web Page
-----------------------------------

First, drop the spaceinvaders.js file into the website.

Now add a canvas to the page.

````HTML
<canvas id="gameCanvas"></canvas>
````

Finally, add the Space Invaders game code. You create the game, 
intialize it with the canvas, start it and make sure you tell
it when a key is pressed or released. That's it!

````HTML
<script>
//	Setup the canvas.
var canvas = document.getElementById("gameCanvas");
canvas.width = 600;
canvas.height = 500;

//	Create the game.
var game = new Game();

//	Initialize it with the game canvas.
game.initialize(canvas);

//	Start the game.
game.start();

//	Listen for keyboard events.
var pressedKeys = [];
window.addEventListener("keydown", function keydown(e) {
	var keycode = window.event.keycode || e.which;
    if(!pressedKeys[keycode])
    	pressedKeys[keycode] = true;
    //	Supress further processing of left/right/space (37/29/32)
    if(keycode == 37 || keycode == 39 || keycode == 32) {
    	e.preventDefault();
    }
    game.keyDown(keycode);
});
window.addEventListener("keyup", function keydown(e) {
	var keycode = window.event.keycode || e.which;
    if(pressedKeys[keycode])
    	delete pressedKeys[keycode];
    game.keyUp(keycode);
});
</script>
````


