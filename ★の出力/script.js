document.write("Q1"+"<br>");
for(var a = 1;a <= 5;a++){
    document.write("★");
}

document.write("<br>"+"Q2"+"<br>");
for(var a = 1;a <=2;a++){
    for(var b = 1;b <= 3;b++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>"+"Q3"+"<br>");
for(var a = 1;a <= 2;a++){
    for(var b = 1;b <= 5;b++){
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>"+"Q4"+"<br>");
for(var a = 1;a <= 4;a++){
    for(var b = 1;b <= 5;b++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>"+"Q5"+"<br>");
for(var a = 1;a <=4;a++){
    for(var b = 1;b <=3;b++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>"+"Q6"+"<br>");
for(var a = 1;a <= 3;a++){
    for(var b = 1;b <= 3;b++){
        if(b % 2 == 0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>"+"Q7"+"<br>");
for(var a = 1;a <= 4;a++){
    for(var b = 1;b <= 5;b++){
        if(b % 2 == 0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>"+"Q8"+"<br>");
for(var a = 1;a <= 5;a++){
    for(var b = 1;b <= 5;b++){
        document.write("★");
    if(a==b){
        document.write("<br>");
        break;
    }
    }
}


