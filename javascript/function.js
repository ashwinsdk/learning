// Performing a task

function library(){
    console.log("hello world")
}

library()

function clg(name){   // name - it is a parameter 
    console.log("hello " + name);
}

clg('Ashwin'); // Ashwin - it is an argument
clg('Vignesh');
// A function can have multiple parameters

function sch(fname,lname){   
    console.log("hello " + fname + " " + lname );
}

sch('Ashwin', 'Sudhakar');

// Calculating a value

function square(num){
   return num * num;
};

console.log(square(5),square(6));