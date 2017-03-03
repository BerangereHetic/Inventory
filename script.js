window.onload = window.onresize = function(event){
    event.preventDefault();
    var canvas        = document.querySelector('canvas'),
        context       = canvas.getContext('2d'),
        sizeX         = window.innerWidth,
        sizeY         = window.innerHeight,
        centerX       = sizeX   / 2,
        centerY       = sizeY   / 2,
        oneQuarterX   = centerX / 2,
        oneQuarterY   = centerY / 2,
        threeQuarterX = oneQuarterX * 3,
        threeQuarterY = oneQuarterY * 3,
        randomPos     = Math.random()*100;
    
    canvas.width = sizeX;
    canvas.height = sizeY;
    
    context.fillStyle = '#ecf0f1';
    context.fillRect(0, 0, sizeX, sizeY);
    
    context.globalCompositeOperation = 'destination-out';
    
    context.beginPath();
    context.arc(400, threeQuarterY-50, 75, 0, 2*Math.PI, false);
    context.fill();
    
    context.beginPath();
    context.moveTo(threeQuarterX, threeQuarterY-200);
    context.lineTo(threeQuarterX-50, threeQuarterY+25);
    context.lineWidth = 20;
    context.strokeStyle = 'orange';
    context.stroke();
    
    context.beginPath();
    context.moveTo(oneQuarterX-100-90, oneQuarterY+30+40);
    context.lineTo(oneQuarterX-200-90, oneQuarterY-100+40);
    context.lineTo(oneQuarterX-90, oneQuarterY-100+40);
    context.fill();
}