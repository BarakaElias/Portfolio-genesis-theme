const cursor = doucment.querySelector('.cursor');
doucment.addEventListener('mousemove',e=>{
    cursor.setAttribute("style","top: "+e.pageY+"px; left: "+e.pageX+"px;");
});