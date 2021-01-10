allowedExtension = new Array("jpg","gif","png","");
 function validateFile(extension,size)
 {
   flag=0;error="";
    for(i=0;i<allowedExtension.length;i++)
    {
    	if(extension==allowedExtension[i])
    	  {
    		maxSize=document.getElementById("maxSize").value
    		  if(size<=maxSize)
    			flag=0;
    		  else
    		    {
    			  flag=1;
    			  error="File Size is Bigger";
    		    }
    		    break;
    	  }
    	 else
    	  {
    	 	flag=1;
    	 	error="File is not Supported";
    	  }
    }

 }
 function handleFileSelect(evt)
 {
   var files[0];
   ext=f.name.substring(f.name.lastIndexOf('.')+1);
   size=f.size;
   classColor=validateFile(ext,size)
   st=''

 }