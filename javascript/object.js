let hostel={
    block:"C",
    roomNo:207,
    student:['301','302','303']
};
console.log(hostel,JSON.stringify(hostel));

let a = JSON.stringify(hostel);
console.log(a,JSON.parse(a));

// Dot notation
hostel.block="B";
console.log(hostel.block);

// Bracket notation
hostel['roomNo']=301;
console.log(hostel['roomNo']);
