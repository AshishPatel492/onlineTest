function validateform()
{
  var flag=true;
  var question=document.getElementsByName("question")[0];
  var optiona=document.getElementsByName("optiona")[0];
  var optionb=document.getElementsByName("optionb")[0];
  var optionc=document.getElementsByName("optionc")[0];
  var optiond=document.getElementsByName("optiond")[0];
  var answer=document.getElementsByName("answer");
  var subject=document.getElementsByName("subject")[0];
  var errormsg=document.getElementById("errormsg");
  errormsg.style.color="red";
  if(question.value.length==0)
    flag=false;
  if(optiona.value.length==0)
    flag=false;
  if(optionb.value.length==0)
    flag=false;
  if(optionc.value.length==0)
    flag=false;
  if(optiond.value.length==0)
    flag=false;
  if(answer[0].checked||answer[1].checked||answer[2].checked||answer[3].checked);
   else
    flag=false;
  if(subject.value.length==0)
    flag=false;
 if(flag==false)
   errormsg.innerHTML="*All Fields are Mandatory";
  else
    errormsg.innerHTML="";
return(flag);
}