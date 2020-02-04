var c = document.getElementById("canvas");
var ctx = c.getContext("2d");
var dots = new Array();

function CreateDot(xStart, yStart, radius, movementX, movementY){
    this.xStart = (typeof xStart !== 'undefined') ? xStart : Math.floor(Math.random() * c.width);
    this.yStart = (typeof yStart !== 'undefined') ? yStart : Math.floor(Math.random() * c.height);
    this.movementX = (typeof movementX !== 'undefined') ? movementX : Math.floor(Math.random() * 50-25)/50;
    this.movementY = (typeof movementY !== 'undefined') ? movementY : Math.floor(Math.random() * 50-25)/50;
    this.radius = (typeof radius !== 'undefined') ? radius : Math.floor(Math.random() * 20);
    this.opacity = 0;
}
function fadeinandout(){

}

function animate(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    dots.push(new CreateDot());
    for(i=0;i<dots.length;i++){
        let d = dots[i];
        ctx.beginPath();
        ctx.arc(d.xStart+=d.movementX, d.yStart+=d.movementY,d.radius, 0,2*Math.PI,0);
        let a = dots.length>99 && i<20 ? 1-(20-i)*0.05 : Math.min(1, d.opacity+=0.05);
        ctx.fillStyle = `rgba(255,255,255,${a})`;
        ctx.fill();
    }
    if(dots.length>100){
        dots.splice(0,2);
    }
    
    requestAnimationFrame(animate);
}
requestAnimationFrame(animate);