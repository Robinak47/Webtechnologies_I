document.getElementById("btn1").addEventListener("click",display);

function display()
{
    let ele2=document.getElementById("div1");
    
    ele2.style.color="Red";
    ele2.style.border="1px, solid, black";
    ele2.style.width="400px";
    ele2.style.height="400px";
    
    ele2.innerHTML="Box Final <div id='div2'> box3 </div>";
    let ele3=document.getElementById("div2");
    
    ele3.style.color="blue";
    ele3.style.border="1px, solid, aqua";
    ele3.style.position="absolute";
    ele3.style.top="100px";
    ele3.style.left="100px";
    ele3.style.width="200px";
    ele3.style.height="200px";
    
}