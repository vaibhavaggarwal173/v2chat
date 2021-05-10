function logcheck(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username==""||password=="")
    {
        document.getElementById("error").innerHTML="Please Enter Valid Details!";
        return false;
    }
}
function signcheck(){ 
    var image=document.getElementById("pimg").value;
    var username=document.getElementById("username1").value;
    var password=document.getElementById("password1").value;
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    if(username==""||password==""||name==""||email==""||image=="")
    {
        document.getElementById("msg").innerHTML="Please Enter All Details!";
        return false;
    }
}
function triggerClick(){
    document.querySelector('#pimg').click();
}
function display(e){
    if(e.files[0]){
        var reader=new FileReader();
        reader.onload=function(e){
            document.querySelector('#profiledisplay').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}