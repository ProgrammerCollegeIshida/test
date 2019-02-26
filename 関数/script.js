document.write("Q1"+"<br>");
function FindTheArea(radius, ratio=3.14){return(radius*radius*ratio);}
document.write("半径5cmの円の面積 ＝"+FindTheArea(5)+"cm2"+"<br>");
document.write("半径7cmの円の面積＝"+FindTheArea(7)+"cm2"+"<br>");
document.write("半径10cmの円の面積＝"+FindTheArea(10)+"cm2"+"<br>");

document.write("Q2"+"<br>");
function EntranceFees(adult,child){return(adult*500)+(child*200);}
document.write("Aグループの料金は"+EntranceFees(2,4)+" yen"+"<br>");
document.write("Bグループの料金は"+EntranceFees(1,5)+" yen"+"<br>");
document.write("Cグループの料金は"+EntranceFees(3,7)+" yen"+"<br>");
