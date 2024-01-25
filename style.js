function validateForm()
{
    var a=document.getElementById("fullname").value;
    var c=document.getElementById("password").value;
    var u=document.getElementById("chk-bx");
    if(a=="" && c=="")
    {
        document.getElementById("item").innerHTML="You must complete all required fields!!!";
        return false;
    }
    else
    {
        document.getElementById("item").innerHTML="";
    }
    if(a=="")
    {
        document.getElementById("item").innerHTML="You must complete all required fields!!!";
        return false;
    }
    else
    {
        document.getElementById("item").innerHTML="";
    }
    if(c=="")
    {
        document.getElementById("item").innerHTML="You must complete all required fields!!!";
        return false;
    }
    else
    {
        document.getElementById("item").innerHTML="";
    }

}