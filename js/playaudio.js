function play() 
{
  var embed=document.createElement('object');
  embed.setAttribute('type','audio/wav');
  embed.setAttribute('data', 'sounds/shoot.wav');
  embed.setAttribute('autostart', true);
  document.getElementsByTagName('body')[0].appendChild(embed);
}
