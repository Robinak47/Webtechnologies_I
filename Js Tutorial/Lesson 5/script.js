
document.getElementById("createNav").addEventListener("click",createNavigationBar);
document.getElementById("convertNav").addEventListener("click",convertNavigationBar);

function createNavigationBar()
{
    let parent=document.getElementById("parentDiv");
    parent.style.border="2px, solid, black";
    parent.style.display="flex";
    parent.style.justifyContent="space-around";
    let child1=document.createElement("div");
    child1.id="child1";
    child1.style.display="inline block";
    child1.style.width="200px";
    child1.style.height="200px";
    child1.style.border="3px, solid, aqua";
    child1.innerHTML="Course";
    child1.style.textAlign="center";
    child1.style.alignContent="center";
    parent.appendChild(child1);

    let child2=document.createElement("div");
    child2.id="child2";
    child2.style.display="inline block";
    child2.style.width="200px";
    child2.style.height="200px";
    child2.style.border="3px, solid, aqua";
    child2.innerHTML="Grade";
    child2.style.textAlign="center";
    child2.style.alignContent="center";

    let child3=document.createElement("div");
    child3.id="child3";
    child3.style.display="inline block";
    child3.style.width="200px";
    child3.style.height="200px";
    child3.style.border="3px, solid, aqua";
    child3.innerHTML="Faculty-info";
    child3.style.textAlign="center";
    child3.style.alignContent="center";

    parent.append(child2,child3);

    parent.removeChild(child2);

    let ele3=document.getElementById("child1");
    ele3.addEventListener("mouseover",changeBackground);
    ele3.addEventListener("mouseout",changeBackground2);

    
}

function convertNavigationBar()
{
    let parent=document.getElementById("parentDiv");
    parent.style.flexDirection="column";
}

function changeBackground()
{
    let ele3=document.getElementById("child1");
    ele3.style.backgroundColor="Red";
    
}

function changeBackground2()
{
    let ele3=document.getElementById("child1");
    ele3.style.backgroundColor="aqua";
    
}