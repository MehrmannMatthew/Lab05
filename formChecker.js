function validate() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var ss = document.querySelector('input[name="ss"]:checked'); //returns null if nothing is checked
    var keyboard = document.getElementById('keyboard').value; //returns true or false
    var mouse = document.getElementById('mouse').value; //returns true or false
    var headphone = document.getElementById('headphones').value; //returns true or false
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
   
    if(ss != null){
        if(keyboard > 0|| mouse > 0 || headphone > 0){
            if(email.match(mailformat)){
                if(password.length > 0){
                    document.getElementById("submit").style.visibility = "visible";
                } else{
                    document.getElementById("submit").style.visibility = "hidden";
                }
            } else{
                document.getElementById("submit").style.visibility = "hidden";
            }
        } else{
            document.getElementById("submit").style.visibility = "hidden";
        }
    }else{
        document.getElementById("submit").style.visibility = "hidden";
    }

}

function addToCart(name){
    var keyboardQuantity = parseInt(document.getElementById('keyboard').value, 10);
    var mouseQuantity = parseInt(document.getElementById('mouse').value, 10);
    var headphonesQuantity = parseInt(document.getElementById('headphones').value, 10);
    
    if(name == 'keyboard'){
        keyboardQuantity = keyboardQuantity + 1;
        document.getElementById('keyboard').value = keyboardQuantity;
        return;
    }
    if(name == 'mouse'){
        mouseQuantity = mouseQuantity + 1;
        document.getElementById('mouse').value = mouseQuantity;
        return;
    }
    if(name == 'headphones'){
        headphonesQuantity = headphonesQuantity + 1;
        document.getElementById('headphones').value = headphonesQuantity;
        return;
    }

}