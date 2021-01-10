function uservalidate()
{
  var flag=true;
  var firstname=document.getElementById('firstname1')[0];
  var lastname=document.getElementById('lastname1')[0];
  var birthdate=document.getElementById('datepicker')[0];
  var gender=document.getElementById('gender')[0];
  var username=document.getElementById('forusername')[0];
  var password=document.getElementById('forpassword')[0];
  var errormsg=document.getElementById('errormsg');
  errormsg.style.color="red";
  if(firstname.value.length==0){
    flag=false;
	alert="All Fields are Mandatory";}
  if(lastname.value.length==0){
    flag=false;
	alert="All Fields are Mandatory";}
  if(birthdate.value.length==0){
    flag=false;
	alert="All Fields are Mandatory";}
  if(gender[0].checked||gender[1].checked);
   else{
    flag=false;
	alert="All Fields are Mandatory";}
  if(username.value.length==0){
    flag=false;
	alert="All Fields are Mandatory";}
  if(password.value.length==0){
    flag=false;
   alert="All Fields are Mandatory";}
 if(flag==false)
   errormsg.innerHTML="*All Fields are Mandatory";
   //alert="All Fields are Mandatory";
  else
    errormsg.innerHTML="";
return(flag);
}