
let x=10;
let y=20;
x="Bangladesh";
y=40;
const z=30;
console.log("The value of X is: "+x);
console.log(y);
console.log(z);

console.log(typeof x);
let char='a';
console.log(typeof char);

let bool=true;
console.log(typeof bool);

let noValue=null;
console.log(typeof noValue);
console.log(noValue);

let num1=20, num2=30;
console.log(num1+num2);
console.log("The value of operation is: "+(num1-num2));

console.log(num1>num2);
console.log(typeof (num1>num2));

let num3=30, num4=40;

console.log("This is the result: "+(num3-num4))

let num5=5;
let str2="5";

console.log(num5==str2);
console.log(num5===str2);

console.log(true||true);
console.log(true&&true);
console.log(true&&false);
console.log(true||false);
console.log(!true);
console.log(true&&!false);

let str3="HI";

if(str3==="hello")
{
    console.log("Hello");
}
else if(str3==="hi")
{
    console.log("hi");
}
else
{
    console.log(str3);
}

for(let i=1;i<11;i++)
{
    console.log(i);
}

let ii=20;
while(ii<101)
{
    console.log(ii);
    ii+=10;
}

let iii=100;

do{
    console.log(iii)
    iii-=10;
}while(iii>-1)


let arr=["meow","Car", "Cat"];

arr.forEach(k => {
    console.log(k);
});

let cars=["volvo","lemborgini", "mastang","ford", "ferari","BMW"];
console.log(cars.length);
console.log(cars[0]);

for(let xx=0; xx<cars.length;xx++)
{
    console.log(cars[xx]);
}


cars.push("Audi");
console.log(cars.length);
for(let xx=0; xx<cars.length;xx++)
{
    console.log(cars[xx]);
}

cars.pop();
console.log(cars.length);
for(let xx=0; xx<cars.length;xx++)
{
    console.log(cars[xx]);
}
console.log(cars.slice(2,4));
cars.push(10);
console.log(cars)

function myFunction()
{
    console.log("Say Hello");
}

function sum(jj, kk)
{
    return jj+kk;
}

myFunction();
let value=sum(20,30);
console.log(value);