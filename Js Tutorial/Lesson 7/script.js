
let userName=document.getElementById("userName");
let userNameRex=/^[a-zA-Z]+(?: [a-zA-Z]+)*$/;
let age=document.getElementById("age");
let ageRegex=/^(0?[1-9]|[1-9][0-9]|1[0-9]{2}|200)$/;
let maleRB=document.getElementById("maleRB");
let femaleRB=document.getElementById("femaleRB");
let pizzaCB=document.getElementById("pizzaCB");
let pastaCB=document.getElementById("pastaCB");
let burgerCB=document.getElementById("burgerCB");
let role=document.getElementById("role");
let userNameErr=document.getElementById("nameErr");
let ageErr=document.getElementById("ageErr");
let genderErr=document.getElementById("genderErr");
let dishErr=document.getElementById("dishErr");
let roleErr=document.getElementById("roleErr");
let isValidated=true;


function validationForm()
{
    
    let selectedGender="";
    let selectedDish="";
    
    if(userNameRex.test(userName.value))
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        userNameErr.innerHTML="Please provide a valid userName";
        userNameErr.style.color="red";
    }

    if(ageRegex.test(age.value))
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        ageErr.innerHTML="Please provide a age";
        ageErr.style.color="red";
    }

    if(maleRB.checked || femaleRB.checked)
    {
        isValidated=true;
        if(maleRB.checked)
        {
            selectedGender=maleRB.value;
        }

        else
        {
            selectedGender=femaleRB.value;
        }
    }

    else
    {
        isValidated=false;
        genderErr.innerHTML="Please select a gender";
        genderErr.style.color="red";
    }

    if(pizzaCB.checked || pastaCB.checked || burgerCB.checked)
    {
        isValidated=true;

        if(pizzaCB.checked)
        {
            selectedDish= pizzaCB.value;
        }

        if(pastaCB.checked)
        {
            selectedDish=selectedDish+", "+pastaCB.value;
        }

        if(burgerCB.checked)
        {
            selectedDish=selectedDish+", "+burgerCB.value;
        }
    }

    else
    {
        isValidated=false;
        dishErr.innerHTML="<br>Please select at least one dish";
        dishErr.style.color="red";
    }

    if(role.value!="")
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        roleErr.innerHTML="please Select a role";
        roleErr.style.color="red";
    }

    
    
    



    if(isValidated)
    {
        
        alert("User Name: "+userName.value+", Age: "+age.value+", gender: "+selectedGender+", Fav Dish: "+selectedDish+", Role: "+role.value);
        return true;
    }

    else
    {
        return false;
    }

}