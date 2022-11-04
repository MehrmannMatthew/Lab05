const ImageArray = ["SlideShow/picture1.jpg", "SlideShow/picture2.jpg", "SlideShow/picture3.jpg", "SlideShow/picture4.jpg", "SlideShow/picture5.jpg"] 
var imgArrayPosition = 0;
function ValidatePasswords(){
    var passwordOne = document.getElementById("pass1").value;
    var passwordTwo = document.getElementById("pass2").value;
  
    if(passwordOne == passwordTwo){
        if(passwordOne.length >= 8){
            document.getElementById("pass1").style.background = "green"
            document.getElementById("pass2").style.background = "green"
            return(alert("Successful Validation"));
        }
        else{
            document.getElementById("pass1").style.background = "red"
            document.getElementById("pass2").style.background = "red"
            return(alert("Password length requirements not met."));
        }
    }
    else{
        document.getElementById("pass1").style.background = "red"
        document.getElementById("pass2").style.background = "red"
        return(alert("Passwords do not match."));
    }
}

function NextImage(x){
    
    if(x == 1){
        if(imgArrayPosition == 4){
            imgArrayPosition = 0;
            document.getElementById("SlideShow").src = ImageArray[imgArrayPosition];
            return;
        }
        else{
            imgArrayPosition++;
            document.getElementById("SlideShow").src = ImageArray[imgArrayPosition];
            return;
        }
     }
     else{
        if(imgArrayPosition == 0){
            imgArrayPosition = 4;
            document.getElementById("SlideShow").src = ImageArray[imgArrayPosition];
            return;
        }
        else{
            imgArrayPosition--;
            console.log(imgArrayPosition);
            document.getElementById("SlideShow").src = ImageArray[imgArrayPosition];
            return;
        }
     }
    
}

function ChangeBorderColor(){
    var newColor = document.getElementById("borderColor").value;
    document.getElementById("paragraph").style.borderColor = newColor;
    return;
}

function ChangeBorderWidth(){
    var newWidth = document.getElementById("borderSize").value;
    document.getElementById("paragraph").style.borderWidth = newWidth+ "px";
    return;
}

function ChangeBackgroundColor(){
    var newColor = document.getElementById("backgroundColor").value;
    document.getElementById("paragraph").style.backgroundColor = newColor;
    return;
}

function ResetCSS(){
    var paragraph = document.getElementById("paragraph");
    paragraph.style.backgroundColor = "#D4E4F7";
    paragraph.style.border = "0px solid #FFFFFF"
}