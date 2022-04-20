function Formvalidate(){
             var uname=document.getElementById("name").value;
            var letters=/^[a-zA-Z\s]*$/;
           if(uname.match(letters)){
               document.getElementById("lbuser").style.visibility="hidden";
                return validatephone();
             }
           
            else{
                document.getElementById("lbuser").style.visibility="visible";
                return validatephone();
                
               }
            
         }
          function validatephone(){
            var teli=document.getElementById("tel").value;
            var num=/^[0-9]+$/;
            if(teli.match(num)){
                document.getElementById("lbteli").style.visibility="hidden";
                return passwordcheack();
            }
             else
                 {
                     document.getElementById("lbteli").style.visibility="visible";
                    return passwordcheack();
                 }
          }
          function passwordcheack(){
              var pas1=document.getElementById("pwd").value;
              var pas2=document.getElementById("cpwd").value;
              if(pas1==pas2){
                  document.getElementById("lbpwd").style.visibility="hidden";
                  return true;
              }
              else
                  {
                     document.getElementById("lbpwd").style.visibility="visible";
                      return false;
                  }
          }
function LoginFormvalidate(){
var Email=document.getElementById("email").value;
     var Password=document.getElementById("pwd").value;
    if(Password=="" || Email==""){
        alert("Please Enter Correct User name & Password !!");
        return false;
        }
    else;{ 
        return true;
            
    }
        
    
    
}