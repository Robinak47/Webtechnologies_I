 let str="Hello world";

 let str2= `hello "mr. Meow"`;
   
 function sayHello()
 {
    console.log(str2);
 }

 sayHello();
 console.log(str.length);

 let str3="I live in Bangladesh";
 console.log(str3.slice(2,6));
 console.log(str3.substring(7,9));
 console.log(str3.indexOf('i'));
 console.log(str3.indexOf('live'));
 console.log(str3.lastIndexOf('i'));
 console.log(str3.startsWith("I"));
 console.log(str3.endsWith("desh"));
 console.log(str3.includes("live"));

let str4="kHairul@aiub.edu";
if(str4.includes("@"))
{
    console.log("it's a valid email");
}

else
{
    console.log("it's not valid email");
}
console.log(str4.toUpperCase());
console.log(str4.toLowerCase());

let str5=" Khairul Alam ";
console.log(str5.trim());
console.log(str5.trimEnd());
console.log(str5.trimStart());

let firstName="Md. Khairul";
let lastName=" Alam";
console.log(firstName+lastName);
console.log(firstName.concat(lastName));

let str6="Hey Hey there";
console.log(str6);
console.log(str6.replace("Hey", "Hi"));
console.log(str6.replaceAll("Hey","HEllo"));


let str7="apple, Banana, Mango";
console.log(str7.split(","));
let str8=str7.split(",");
console.log(str8[0]);

let str9="Apple";
console.log(str9.charAt(0));

let str10="hello";
console.log(str10.repeat(10));

let str11="Bangladesh";
console.log(str11.match("desh1"));

