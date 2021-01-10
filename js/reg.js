function uservalidate()
{
	var flag=true;
	var fname=document.getElementsByName('firstname')[0];
	var lname=document.getElementsByName('lastname')[0];
	var bdate=document.getElementsByName('birthdate')[0];
	var gender=document.getElementsByName('gender')[0];
	var uname=document.getElementsByName('username')[0];
	var atindex=e.indexOf('@');
    var dotindex=e.lastIndexOf('.');
	var e_error=document.getElementById('errormsg');
	e_error.style.color="red";
	var password=document.getElementsByName('password')[0];
	var errormsg=document.getElementById('errormsg');
	errormsg.style.color="red";
	if(fname.value.length==0)
		flag=false;
	if(lname.value.length==0)
		flag=false;
	if(bname.value.length==0)
		flag=false;
	if(uname.value.length==0)
	    if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
		e_error.innerHTML="email is incorrect";
		flag=false;
	if(pname.value.length==0)
		flag=false;
	if(flag)
		errormsg.innerHTML="";
	else
		errormsg.innerHTML="*Password is blank or incorrect";
	
	return(flag); 
}