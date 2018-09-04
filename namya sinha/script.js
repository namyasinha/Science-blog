
 function myFunction() 
 {
    var x = document.getElementById("pwd");//accessing element by id pwd
    var x1 = document.getElementById("pwd1");
    if(x.value==x1.value)
    {
    document.getElementById("message2").innerHTML = "MATCHED";
    }

    else
    {
    document.getElementById("message2").innerHTML= "NOT MATCHED";
    }

     var password=x.value;
     var special="!@#$%^*_?~";
     var passscore=0;
  
     for(var i=0;i<password.length;i++)
     {
  	    if(special.indexOf(password.charAt(i))>-1)
  	     {
            passscore+=20;
  	     }

     }

     if(/[a-z]/.test(password))
      {passscore+=20;}

     if(/[A-Z]/.test(password))
      {passscore+=20;}

     if(/[\d]/.test(password))
      {passscore+=20;}

     if(password.length>=8)
      {passscore+=20;}
  
    var strength="";
    
     if(passscore>=100)
      {strength="STRONG";}

     else if(passscore>=80)
      {strength="MEDIUM";}

     else if(passscore>=60)
      {strength="WEAK";}

     else{strength="VERY WEAK";}

     document.getElementById("message3").innerHTML=strength;

    
}
  