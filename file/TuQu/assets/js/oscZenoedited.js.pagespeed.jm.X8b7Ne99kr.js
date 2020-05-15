var strNaN="NaN";var strInf="Infinity";var oscError;"ERROR";var strMathError="Math Error";var strEmpty=0;var maxLength=8;var opCodeArray=[];var stackArray=[];var trigDisplay="";var openArray=[];var stackVal1=1;var stackVal2=0;var opCode=0;var stackVal=0;var memVal=0;var boolClear=true;var newOpCode=0;var modeSelected="deg";var displayString="";var memory=0;var trig=0;var display="";var afterdec="";var dS="";var index;$(document).ready(function(){$('.keyPad_TextBox1').focus(function(){this.blur();});$('.keyPad_TextBox').focus(function(){this.blur();});$.fn.setCursorPosition=function(pos){this.each(function(index,elem){if(elem.setSelectionRange){elem.setSelectionRange(pos,pos);}else if(elem.createTextRange){var range=elem.createTextRange();range.collapse(true);range.moveEnd('character',pos);range.moveStart('character',pos);range.select();}});return this;};$("[class^=keyPad_]").each(function(){$(this).click(function(){$('#keyPad_UserInput1').setCursorPosition($('#keyPad_UserInput1').val().length);});});var inBox=$('#keyPad_UserInput');var inBox1=$('#keyPad_UserInput1');var modeSelected=$('input[name=degree_or_radian]:radio:checked').val();$("#keyPad_UserInput").val(strEmpty);$("div#keyPad a.keyPad_btnNumeric").click(function(){var btnVal=$(this).html();var inBox=$('#keyPad_UserInput');var inBox1=$('#keyPad_UserInput1');if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;if(boolClear){inBox.val(strEmpty);boolClear=false;}
var str=inBox.val();if(str.length>maxLength)return;if(this.id=="keyPad_btnDot"&&str.indexOf('.')>=0&&inBox1.val()!="")
{inBox.val(strEmpty+".");inBox1.val("");return;}
else if(this.id=="keyPad_btnDot"&&str.indexOf('.')>=0)
return;displayCheck();if(str!=strEmpty||str.length>1||this.id=="keyPad_btnDot"){inBox.val(str+btnVal);stackVal1=1;}else{inBox.val(btnVal);stackVal1=1;}
inBox.focus();});$("a.keyPad_btnConst").click(function(){var retVal=strEmpty;var inputBox=$('#keyPad_UserInput');var inBox1=$('#keyPad_UserInput1');if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;switch(this.id){case'keyPad_btnPi':retVal=Math.PI;break;case'keyPad_btnPiDiv2':retVal=Math.PI/2;break;case'keyPad_btnPiDiv3':retVal=Math.PI/3;break;case'keyPad_btnPiDiv4':retVal=Math.PI/4;break;case'keyPad_btnPiDiv6':retVal=Math.PI/6;break;case'keyPad_btnE':retVal=Math.E;break;case'keyPad_btnInvE':retVal=1/Math.E;break;case'keyPad_btnSqrt2':retVal=Math.SQRT2;break;case'keyPad_btnSqrt3':retVal=Math.sqrt(3);break;case'keyPad_btnCubeRoot2':retVal=Math.pow(2,1/3);break;case'keyPad_btnLn10':retVal=Math.LN10;break;case'keyPad_btnLgE':retVal=Math.LOG10E;break;case'keyPad_btnSigma':retVal=0.69;break;case'keyPad_btnSigma3':retVal=0.007;break;case'keyPad_btnSigma6':retVal=3.4*Math.pow(10,-6);break;default:break;}
displayCheck();stackVal1=1;boolClear=true;if(retVal!=strEmpty){$('#keyPad_UserInput').val(retVal);}else{$('#keyPad_UserInput').val(retVal);}
inputBox.focus();});$("div#keyPad a.keyPad_btnBinaryOp").click(function(){if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;switch(this.id){case'keyPad_btnPlus':stackCheck($("#"+this.id).text());newOpCode=1;if(opCode==10&&stackArray.length>0&&stackArray[stackArray.length-1]=="{")
opcodeChange();operation();stackVal1=0;break;case'keyPad_btnMinus':stackCheck($("#"+this.id).text());newOpCode=2;if(opCode==10&&stackArray.length>0&&stackArray[stackArray.length-1]=="{")
opcodeChange();operation();stackVal1=0;break;case'keyPad_btnMult':stackCheck($("#"+this.id).text());newOpCode=3;if(opCode==1||opCode==2){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<3||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_btnDiv':stackCheck($("#"+this.id).text());newOpCode=4;if(opCode<4&&opCode){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<4||stackVal1==5||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_%':stackCheck("%");newOpCode=11;if(opCode<6&&opCode){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<6||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_EXP':stackCheck("e+0");newOpCode=9;if(opCode<6&&opCode){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<6||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=1;stackVal2=7;break;case'keyPad_btnYpowX':stackCheck("^");newOpCode=6;if(opCode<6&&opCode){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<6||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_btnMod':stackCheck($("#"+this.id).text());newOpCode=5;if(opCode==1||opCode==2){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]==1||2||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_btnYrootX':stackCheck("yroot");newOpCode=7;if(opCode<6&&opCode){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<6||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_btnYlogX':stackCheck("logxBasey");newOpCode=8;if(opCode==1||opCode==2){opcodeChange();}
if(opCode==10)
{if(opCodeArray[opCodeArray.length-1]<3||(stackArray.length>0&&stackArray[stackArray.length-1]=="{"))
{opcodeChange();}
else
{operation();}}
stackVal1=0;break;case'keyPad_btnOpen':displayString=inBox1.val()+$("#"+this.id).text();newOpCode=0;inBox.val(0);if(opCode!=0){opcodeChange();}
openArray.push("{");stackArray.push("{");stackVal1=1;break;case'keyPad_btnClose':if(stackVal2==6){stackVal=parseFloat(inBox.val());displayString=inBox1.val()+inBox.val()+$("#"+this.id).text();}
else if(newOpCode!=10){if(stackVal1!=3)
{if((inBox1.val().indexOf("e+0")>-1)&&inBox.val().indexOf("-")>-1)
inBox1.val(inBox1.val().replace("e+0","e"));else if((inBox1.val().indexOf("e+0")>-1))
inBox1.val(inBox1.val().replace("e+0","e+"));displayString=inBox1.val()+inBox.val()+$("#"+this.id).text();}
else
displayString=inBox1.val()+$("#"+this.id).text();}
else{displayString=inBox1.val()+$("#"+this.id).text();}
if(openArray[0])
{openArray.pop();newOpCode=10;while(opCodeArray[0]||openArray[0]){if(stackArray[stackArray.length-1]=="{")
{stackArray.pop();break;}
else{oscBinaryOperation();stackVal=stackArray[stackArray.length-1];if(stackVal=="{")
{stackArray.pop();opCode=0;break;}
stackArray.pop();opCode=opCodeArray[opCodeArray.length-1];opCodeArray.pop();if(!opCodeArray[0]&&stackArray.length>0&&stackArray[stackArray.length-1]!="{")
{stackVal=stackArray[stackArray.length-1];}}}}
else
{return;}
stackVal2=1;stackVal1=5;break;case'keyPad_btnPercent':if(opCode==1||opCode==2)
{inBox.val((stackVal*parseFloat(inBox.val())/100));}
else if(opCode==3||opCode==4)
{inBox.val((parseFloat(inBox.val())/100));}
else return;break;default:break;}
if(opCode){oscBinaryOperation();}
else{stackVal=parseFloat(inBox.val());boolClear=true;}
opCode=newOpCode;inBox.focus();inBox1.val(displayString);});$("a.keyPad_btnMemoryOp").click(function(){var inputBox=$('#keyPad_UserInput');var x=parseFloat(inputBox.val());if((inputBox.val())=="")
{x=0;}
var retVal=0;if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;switch(this.id){case'keyPad_MS':memory=x;$("#memory").addClass("memoryshow");$("#memory").removeClass("memoryhide");retVal=inBox.val();break;case'keyPad_M+':memory=x+parseFloat(memory);$("#memory").addClass("memoryshow");$("#memory").removeClass("memoryhide");retVal=inBox.val();break;case'keyPad_MR':retVal=parseFloat(memory);stackVal1=1;break;case'keyPad_MC':memory=0;$("#memory").removeClass("memoryshow");$("#memory").addClass("memoryhide");retVal=inBox.val();break;case'keyPad_M-':$("#memory").addClass("memoryshow");$("#memory").removeClass("memoryhide");memory=parseFloat(memory)-x;retVal=inBox.val();break;default:break;}
if(retVal!=strEmpty){$('#keyPad_UserInput').val(retVal);}else{$('#keyPad_UserInput').val(retVal);}
boolClear=true;inputBox.focus();});function stackCheck(text)
{if(stackVal1==2){inBox1.val("");}
if(stackVal1==0){opCode=0;var x=1;switch(newOpCode)
{case 5:x=3;break;case 7:x=5;break;case 8:x=9;break;default:break;}
if(!(inBox1.val().indexOf("e+")>-1))
inBox1.val(inBox1.val().substring(0,inBox1.val().length-x));stackVal2=2;}
if(stackVal1==5||stackVal2==2)
{stackVal2=0;displayString=inBox1.val()+text;}
else{if((inBox1.val().indexOf("e+0")>-1)&&inBox.val().indexOf("-")>-1)
inBox1.val(inBox1.val().replace("e+0","e"));else if((inBox1.val().indexOf("e+0")>-1))
inBox1.val(inBox1.val().replace("e+0","e+"));displayString=inBox1.val()+inBox.val()+text;}}
function operation()
{while(opCodeArray[0]&&opCode){if(opCode==10)
{opCode=opCodeArray[opCodeArray.length-1];stackVal=stackArray[stackArray.length-1];if(newOpCode==1||newOpCode==2||newOpCode<=opCode){opCodeArray.pop();stackArray.pop();}
else{opCode=0;break;}}
else if(stackArray[stackArray.length-1]=="{")
{break;}
else{oscBinaryOperation();stackVal=stackArray[stackArray.length-1];if(stackVal=="{")
{opCode=0;break;}
opCode=opCodeArray[opCodeArray.length-1];if(newOpCode==1||newOpCode==2||newOpCode<=opCode){opCodeArray.pop();stackArray.pop();}
else{opCode=0;break;}
if(!opCodeArray[0]&&stackArray.length>0&&stackArray[stackArray.length-1]!="{")
{stackVal=stackArray[stackArray.length-1];}}}}
function opcodeChange()
{if(opCode!=10&&opCode!=0){opCodeArray.push(opCode);stackArray.push(stackVal);}
if(opCode==0){stackArray.push(stackVal);}
opCode=0;}
function displayCheck(){switch(stackVal1){case 2:inBox1.val("");break;case 3:inBox1.val(inBox1.val().substring(0,inBox1.val().length-trigDisplay.length));stackVal2=4;break;case 5:var string="";for(var i=openArray.length;i>=0;i--){string=string+displayString.substring(0,displayString.indexOf("(")+1);displayString=displayString.replace(string,"");}
displayString=string.substring(0,string.lastIndexOf("("));inBox1.val(displayString);stackVal2=6;break;default:break;}}
function oscBinaryOperation(){var inBox=$('#keyPad_UserInput');var x2=parseFloat(inBox.val());var retVal=0;switch(opCode){case 9:stackVal=parseFloat(stackVal)*Math.pow(10,x2);break;case 1:stackVal+=x2;break;case 2:stackVal-=x2;break;case 3:stackVal*=x2;break;case 4:stackVal/=x2;break;case 6:var precisioncheck=stackVal;stackVal=Math.pow(stackVal,x2);if(precisioncheck==10&&stackVal%10!=0&&(Math.abs(stackVal)<0.00000001||Math.abs(stackVal)>100000000)&&x2%1==0)
stackVal=stackVal.toPrecision(7);break;case 5:stackVal=stackVal%x2;break;case 7:stackVal=nthroot(stackVal,x2);break;case 8:stackVal=Math.log(stackVal)/Math.log(x2);break;case 11:stackVal=stackVal/100*x2;break;case 0:stackVal=x2;default:break;}
retVal=stackVal;if(Math.abs(retVal)<0.00000001||Math.abs(retVal)>100000000){}
else
{if(retVal.toFixed(8)%1!=0)
{var i=1;while(i<10)
{if((retVal.toFixed(i)!=0)&&(retVal.toFixed(i)/retVal.toFixed(i+8)==1)){retVal=retVal.toFixed(i);break;}
else{i++;}}}
else{retVal=retVal.toFixed(0);}}
inBox.val(retVal);boolClear=true;trig=0;inBox.focus();}
$("a.keyPad_btnUnaryOp").click(function(){var inputBox=$('#keyPad_UserInput');var x=parseFloat(inputBox.val());var retVal=oscError;if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;switch(this.id){case'keyPad_btnInverseSign':retVal=-x;trig=1;stackVal2=3;break;case'keyPad_btnInverse':retVal=1/x;displayTrignometric("reciproc",x);break;case'keyPad_btnSquare':retVal=x*x;displayTrignometric("sqr",x);break;case'keyPad_btnSquareRoot':retVal=Math.sqrt(x);displayTrignometric("sqrt",x);break;case'keyPad_btnCube':retVal=x*x*x;displayTrignometric("cube",x);break;case'keyPad_btnCubeRoot':retVal=nthroot(x,3);displayTrignometric("cuberoot",x);break;case'keyPad_btnLn':retVal=Math.log(x);displayTrignometric($("#"+this.id).text(),x);break;case'keyPad_btnLg':retVal=Math.log(x)/Math.LN10;displayTrignometric($("#"+this.id).text(),x);break;case'keyPad_btnExp':retVal=Math.exp(x);displayTrignometric("powe",x);break;case'keyPad_btnSin':retVal=sinCalc(modeSelected,x);modeText($("#"+this.id).text(),x);trig=1;break;case'keyPad_btnCosin':retVal=cosCalc(modeSelected,x);modeText($("#"+this.id).text(),x);trig=1;break;case'keyPad_btnTg':retVal=tanCalc(modeSelected,x);modeText($("#"+this.id).text(),x);trig=1;break;case'keyPad_btnCtg':retVal=cotCalc(modeSelected,x);modeText($("#"+this.id).text(),x);break;case'keyPad_btnFact':retVal=factorial(x);displayTrignometric("fact",x);break;case'keyPad_btn10X':retVal=Math.pow(10,x);if(retVal%10!=0&&(Math.abs(retVal)<0.00000001||Math.abs(retVal)>100000000)&&(x%1==0))
retVal=retVal.toPrecision(7);displayTrignometric("powten",x);break;case'keyPad_btnAsinH':retVal=inverseSineH(x);modeText($("#"+this.id).text(),x);break;case'keyPad_btnAcosH':retVal=Math.log(x+Math.sqrt(x+1)*Math.sqrt(x-1));modeText($("#"+this.id).text(),x);break;case'keyPad_btnAtanH':retVal=0.5*(Math.log(1+x)-Math.log(1-x));modeText($("#"+this.id).text(),x);break;case'keyPad_btnAbs':retVal=Math.abs(x);displayTrignometric("abs",x);break;case'keyPad_btnLogBase2':retVal=Math.log(x)/Math.log(2);displayTrignometric("logXbase2",x);break;case'keyPad_btnAsin':retVal=sinInvCalc(modeSelected,x);modeText("asin",x);trig=1;break;case'keyPad_btnAcos':retVal=cosInvCalc(modeSelected,x);modeText("acos",x);trig=1;break;case'keyPad_btnAtan':retVal=tanInvCalc(modeSelected,x);modeText("atan",x);trig=1;break;case'keyPad_btnSec':retVal=secCalc(modeSelected,x);break;case'keyPad_btnCosec':retVal=cosecCalc(modeSelected,x);break;case'keyPad_btnSinH':retVal=(Math.pow(Math.E,x)-Math.pow(Math.E,-x))/2;modeText($("#"+this.id).text(),x);break;case'keyPad_btnCosinH':retVal=(Math.pow(Math.E,x)+Math.pow(Math.E,-x))/2;modeText($("#"+this.id).text(),x);break;case'keyPad_btnTgH':retVal=(Math.pow(Math.E,x)-Math.pow(Math.E,-x));retVal/=(Math.pow(Math.E,x)+Math.pow(Math.E,-x));modeText($("#"+this.id).text(),x);break;case'keyPad_btnSecH':retVal=2/(Math.pow(Math.E,x)+Math.pow(Math.E,-x));break;case'keyPad_btnCosecH':retVal=2/(Math.pow(Math.E,x)-Math.pow(Math.E,-x));;break;case'keyPad_btnOnePlusX':retVal=1+x;break;case'keyPad_btnOneMinusX':retVal=1-x;break;default:break;}
if(stackVal2==1){stackVal=retVal;}
if(stackVal2!=3){stackVal2=2;}
stackVal1=3;boolClear=true;if(retVal==0||retVal==strMathError||retVal==strInf){inputBox.val(retVal);}else if((Math.abs(retVal)<0.00000001||Math.abs(retVal)>100000000)&&trig!=1){}
else{if(retVal.toFixed(8)%1!=0)
{var i=1;while(i<10)
{if((retVal.toFixed(i)!=0)&&(retVal.toFixed(i)/retVal.toFixed(i+8)==1)){retVal=retVal.toFixed(i);break;}
else{i++;}}}
else{retVal=retVal.toFixed(0);}}
if(retVal==-0)
retVal=0;inputBox.val(retVal);trig=0;inBox1.val(displayString);inputBox.focus();});$("div.degree_radian").click(function(){modeSelected=$('input[name=degree_or_radian]:radio:checked').val();});function inverseSineH(inputVal){return Math.log(inputVal+Math.sqrt(inputVal*inputVal+1));}
function modeText(text,x){var mode="d";if(modeSelected!="deg"){mode="r";}
displayTrignometric(text+mode,x);}
function displayTrignometric(text,x)
{if(stackVal2==1){var string="";for(var i=openArray.length;i>=0;i--){string=string+displayString.substring(0,displayString.lastIndexOf("(")+1);displayString=displayString.replace(string,"");}
displayString=string.substring(0,string.lastIndexOf("("));trigDisplay=text+"("+x+")";}
if(stackVal2==2||stackVal1==3){if(stackVal2==3){trigDisplay=text+"("+x+")";stackVal2=2;}
else{displayString=displayString.replace(trigDisplay,"");trigDisplay=text+"("+trigDisplay+")";}}
else{if(stackVal2==4){displayString="";}trigDisplay=text+"("+x+")";}
displayString=displayString+trigDisplay;}
function nthroot(x,n){try{var negate=n%2==1&&x<0;if(negate)
x=-x;var possible=Math.pow(x,1/n);n=Math.pow(possible,n);if(Math.abs(x-n)<1&&(x>0==n>0))
return(negate?-possible:possible);else return(negate?-possible:possible);}catch(e){}}
function changeXBasedOnMode(mode,inputValue){if(mode=="deg"){return(inputValue*(Math.PI/180));}else if(mode=="rad"){return inputValue;}}
function tanCalc(mode,inputVal){var ipVal=changeXBasedOnMode(mode,inputVal);if(ipVal%(Math.PI/2)=="0"){if((ipVal/(Math.PI/2))%2=="0"){return"0";}else{return strMathError;}}else{return Math.tan(ipVal);}}
function cosCalc(mode,inputVal){var ipVal=changeXBasedOnMode(mode,inputVal);if(ipVal.toFixed(8)%(Math.PI/2).toFixed(8)=="0"){if((ipVal.toFixed(8)/(Math.PI/2)).toFixed(8)%2=="0"){return Math.cos(ipVal);}else{return"0";}}else{return Math.cos(ipVal);}}
function sinCalc(mode,inputVal){var ipVal=changeXBasedOnMode(mode,inputVal);if((ipVal.toFixed(8)%Math.PI).toFixed(8)==0){return"0";}else{return Math.sin(ipVal);}}
function cotCalc(mode,inputVal){var tanVal=tanCalc(mode,inputVal);if(tanVal==0){return strMathError;}else if(tanVal==strMathError){return'0';}else{return 1/tanVal;}}
function secCalc(mode,inputVal){var cosVal=cosCalc(mode,inputVal);if(cosVal.toFixed(8)==0){return strMathError;}else{return 1/cosVal;}}
function cosecCalc(mode,inputVal){var sinVal=sinCalc(mode,inputVal);if(sinVal.toFixed(8)==0){return strMathError;}else{return 1/sinVal;}}
function changeValOfInvBasedOnMode(mode,ipVal){if(mode=='deg'){return(180/Math.PI)*ipVal;}else{return ipVal;}}
function sinInvCalc(mode,inputVal){var opVal;var ipVal=Math.asin(inputVal);if(strNaN.indexOf(ipVal.toFixed(8))>-1){opVal=strMathError;}else{opVal=changeValOfInvBasedOnMode(mode,ipVal);}
return opVal;}
function cosInvCalc(mode,inputVal){var opVal;var ipVal=Math.acos(inputVal);if(strNaN.indexOf(ipVal.toFixed(8))>-1){opVal=strMathError;}else{opVal=changeValOfInvBasedOnMode(mode,ipVal);}
return opVal;}
function tanInvCalc(mode,inputVal){var opVal;var ipVal=Math.atan(inputVal);if(strNaN.indexOf(ipVal.toFixed(8))>-1){opVal=strMathError;}else{opVal=changeValOfInvBasedOnMode(mode,ipVal);}
return opVal;}
$("div#keyPad a.keyPad_btnCommand").click(function(){var inBox=$('#keyPad_UserInput');var inBox1=$('#keyPad_UserInput1');var i=0;var j=0;var strInput=inBox.val();switch(this.id){case'keyPad_btnEnter':if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;while(opCode||opCodeArray[0]){if(stackArray[stackArray.length-1]=="{")
{stackArray.pop();}
oscBinaryOperation();stackVal=stackArray[stackArray.length-1];opCode=opCodeArray[opCodeArray.length-1];stackArray.pop();opCodeArray.pop();};opCode=0;inBox.focus();displayString="";trigDisplay="";stackVal=strEmpty;openArray=[];if(stackVal1!=2){if(stackVal1==3||stackVal2==1){if(stackVal2!=3)strInput="";}
if(newOpCode==9){if(strInput.indexOf("-")>-1)
{inBox1.val(inBox1.val().substring(0,inBox1.val().lastIndexOf("+")));}
else{inBox1.val(inBox1.val().replace("e+0","e+"));}}
inBox1.val(inBox1.val()+strInput);}
stackVal1=2;newOpCode=0;stackVal2=0;stackArray=[];opCodeArray=[];return;case'keyPad_btnClr':if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;if(strInput==strEmpty){opCode=0;boolClear=false;}
else{inBox.val(strEmpty);}
break;case'keyPad_btnBack':if(stackVal1==1||stackVal2==3){if(strInput.length>1){if(inBox.val().indexOf("Infinity")>-1||inBox.val().indexOf(strMathError)>-1)return;inBox.val(strInput.substring(0,strInput.length-1));if(inBox.val()=="-")inBox.val("0");break;}else{inBox.val("0");break;}}
else break;case'keyPad_btnAllClr':inBox.val(strEmpty);displayString="";trigDisplay="";stackArray=[];opCodeArray=[];openArray=[];inBox1.val("");stackVal=strEmpty;stackVal1=1;stackVal2=0;newOpCode=0;opCode=0;break;default:break;}});})
function factorial(n){if(n>170)return strInf;if(n==1||n==0)return 1;else if(n<0)return strMathError;else if(n%1!=0)return gamma(n+1);else
return n*factorial(n-1);}
function gamma(n){var g=7,p=[0.99999999999980993,676.5203681218851,-1259.1392167224028,771.32342877765313,-176.61502916214059,12.507343278686905,-0.13857109526572012,9.9843695780195716e-6,1.5056327351493116e-7];if(n<0.5){return Math.PI/Math.sin(n*Math.PI)/gamma(1-n);}else{n--;var x=p[0];for(var i=1;i<g+2;i++){x+=p[i]/(n+i);}
var t=n+g+0.5;return Math.sqrt(2*Math.PI)*Math.pow(t,(n+0.5))*Math.exp(-t)*x;}}