function validateForm()
{
    let errSpan=document.getElementById("errSpan");
    let errSpanAge=document.getElementById("errSpanAge");
    let userName=document.getElementById("userName").value;
    let age=document.getElementById("age").value;
    let userNameRegex=/^[a-zA-Z]+(?:[- '][a-zA-Z]+)*$/;
    let error=false;
    let ageRegex=/^\d+$/;

    let typeAge=Number(age);
    let ageType=typeof typeAge;
    
    


    if(userNameRegex.test(userName))
    {
        alert("user name:"+userName);
        
        
    }

    else
    {
        errSpan.innerHTML="Please input a valid user name";
        errSpan.style.color="Red";
        error=true;
        
        
    }

    if(ageType=="number")
    {
       
        alert("age"+age);

    }

    else
    {
        errSpanAge.innerHTML="Please input a valid Age";
        errSpanAge.style.color="Red";
        error=true;
    }

    if(!error)
    {
        return true;
    }

    else
    {
        return false;
    }

    
}