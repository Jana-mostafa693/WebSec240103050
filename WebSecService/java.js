document.writeln("this is externel file");
console.log("my name is jana")
// premitive data type store actual data when copy we copy the real value
// num ,string ,undefiend ,null ,boolean,simbol,bignet
// reference type store variable referece to mark on real data when copy we copy reference 
// object is a{key :value },array,function


// local scope is avariable in{}  have two type function and block scops
// function scope local in function
//  block scope local in any {} either function

let v= 4;
 v=5;
console.log(v)
console.log(typeof v);

const r=2;
// r=4;

let s="name";
console.log(s);
console.log(typeof s);

let z;
console.log(z);

let b= false;
console.log(typeof b);

let n=null;
console.log(typeof n)
console.log(n==null);


let f=10;
let c=10;
console.log(f==c);

f=Symbol(10);
c=Symbol(10);
console.log(f==c);


let i= 13;
console.log(typeof i);


i=13n;
console.log(typeof i);

let u=19;
u =String(u);
console.log( typeof u)


let q="17";
q= Number(q);
console.log(typeof q);


let x=155;
x=BigInt(x);
console.log( typeof x)


console.log("122.77 pt");
let l=parseInt("122.77 pt");
console.log(l);


let k =parseFloat("122.77 pt");
console.log(k);




console.log("5 "+12);

console.log("12 "+5);
//plus make concatination  and anthor operarter make a math operation

console.log("12 "- 5);

console.log("12 "/ 5);


console.log(2=="2")
console.log(2==="2")
// === is a strict 

var temp=30;

if (temp>=35) {
    document.writeln("sunny")
    
}else if(temp<35 && temp>25){
    document.writeln("windy")

}else{
document.writeln("cold")
}

var d=25;

// ternery operator = inline if
// if(temp>=35){
//     d="sunny"
// }else{
// d="cold"
// }

d=(temp>=35)?"sunny":"cold";
document.writeln(d)


var day=1;

switch (day) {
    case 1:
        document.writeln("sunday")

        break;

  case 2:
        document.writeln("monday")

        break;
    default:
                document.writeln("wrong number")

        break;
}


function hello(){
    console.log("hello");
}
hello();

function add(n1=2,n2=3) {
    var result=n1+n2
    console.log(result)
    
}
add(5,3)

function multiply(num1,num2){
    var val=num1*num2
    return val
}
console.log(multiply(4,5))


var y=function (){
    console.log("this is y")
}

y()


function callanthor(fn){
     console.log("call anthor function")
     fn()
}

callanthor(y)

callanthor(function(){
    console.log("this ia aparametar")
})
// anonomus function mean func without name

callanthor(()=>{
    console.log("this ia aparametar")
})
//  this is arrow function


// {} function scope and block scope anything in{} neither function only mean func scope


// var is not block scope and this is a function scope

// let ,const are function scope and block scope


var arr=[1,2,3,"name" ,"string"]

console.log(arr[2])


arr[3]=40
console.log(arr)
console.log(arr.length)
arr.pop()
console.log(arr)
arr.push(90,20)
console.log(arr)

arr.splice(3,2,190)
        //   index ,num ofelement TO DELETE IT,replace

// we can add by splice and make delet num=0

arr.splice(3,0,190)

arr.shift()
// delete first element

arr.unshift(3)
// add this num for first element



var arr9=[30,40,50,60,70,30]
console.log(arr9.indexOf(40))
console.log(arr9.indexOf(30))
// return index of 30 in first time
console.log(arr9.indexOf(100))   
console.log(arr9.lastIndexOf(30))
// return index of 30 in secound time

var smallarr=arr9.slice(2,5)
// first index ,last index is excluded

console.log(arr9.reverse())

var ar=[12,"jana"]
var ar2=[90,70]
var newarr=ar.concat(ar2)
console.log(newarr)

var strarr=["hello","jana","mostafa"]
var str=strarr.join(" ")
// sprator =" " space 
// .join convert array to string
console.log(str)


for (let k=0;k<arr9.length;k++){
    console.log(arr9[k])
}


arr9.forEach(function(element){
    console.log(element)
})
// value in element 



for (let element of arr9){
    console.log(element)
}
// for each and for of should print each element



var obj1=document.getElementById("id")
console.log(obj1)

//  2lines for get element from html by id or class
var obj2=document.getElementsByClassName("cls0")[1]
console.log(obj2)
// [1] this index of element that take class cls0



var obj3=document.getElementsByTagName("h2")
console.log(obj3)

var obj4=document.querySelector(".content")
obj4.style.background="grey"

obj1.innerHTML="hello <a href='#'> test</a>"


var obj5=document.getElementById("input1")
obj5.setAttribute("placeholder","enter")

obj5.setAttribute("value","jana2")


var elem=document.createElement("h1")
var child1=document.createTextNode("this is header 1")
elem.appendChild(child1)

document.body.appendChild(elem)

var obj8=document.getElementById("btn")
obj8.addEventListener("click", function(){
    alert("submitted")
})



var person={
    name:"jana",
    age:19,
    hello:function () {
        console.log("hello "+this.name)
        
    }
}
person.hello()
console.log(person.age)

person.name="mostafa"
console.log(person)


person.major="cs"
console.log(person)

delete person.age
console.log(person)

console.log(Object.values(person))

console.log(Object.keys(person))

console.log(Object.entries(person))
// print obj in key ,value

var person2={}

Object.assign(person2,person,{id:1234})
console.log(person2)

for(var h in person2){
    console.log(h +" "+person2[h])
}

function Person(name ,age,major){
    this.name=name 
    this.age=age
    this.major=major
}

console.log(Array.prototype)
var p2=new Person("jana",19,"cyber security")
console.log(p2)


function Animal(name ){
this.name=name 
sound= function(){
    console.log(this.name+" makes a sound")
}

}


//  prototype obj created by default functions inside it  
Animal.prototype.sound= function(){
    console.log(this.name+" makes a sound")
}

console.log(Animal.prototype)
let a=new Animal("cat")

a.sound()

function Dog(name) {
    this.name=name
    
}

Dog.prototype=Object.create(Animal.prototype)
var d=new Dog("dog")
d.sound()

class Animal2{
    constructor(name){
        this.name=name
    }
    sound(){
        console.log(this.name+" makes a sound")
    }
}

class Dog2 extends Animal2{
    constructor(name){
        // this.name=name
                super(name)
    }
    sound(){
        console.log(this.name+" noisy")
    }
}
var d4=new Dog2("puppy")
d4.sound()

var a4=new Animal("elephant")
a4.sound()


let str1 =JSON.stringify(person)
console.log(str1)

let obj=JSON.parse(str1)
console.log(obj)



