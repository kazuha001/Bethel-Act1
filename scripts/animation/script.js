
//For Interface
function backfunction() {

    var anime1Id = document.getElementById("anime1")

    var subformId = document.getElementById("subform")

    var anime2Id = document.getElementById("anime2")

    subformId.style.transform = "scale(15.0)"

    anime2Id.style.transform = "scale(1.0)"
    anime2Id.style.filter = "blur(0)"
    anime2Id.style.boxShadow = "0px 0px 0px 0px #000"

    setTimeout(() => {
        anime1Id.style.display = "none"
        anime1Id.style.opacity = "0"
    }, 700)
   

}

//For Sign Up
function signupPopUp() {

    var anime1Id = document.getElementById("anime1")

    var subformId = document.getElementById("subform")

    var anime2Id = document.getElementById("anime2")

    anime1Id.style.display = "flex"
    
    
    anime2Id.style.transform = "scale(0.9)"
    anime2Id.style.filter = "blur(20px)"
    anime2Id.style.boxShadow = "10px 10px 10px 10px #000"
    
    setTimeout(() => {
        subformId.style.transform = "scale(1.0)"
    }, 100)
    setTimeout(() => {
        anime1Id.style.opacity = "1"
    }, 150)
    

}
//For Log In 
function loginPopUp() {

    var anime3Id = document.getElementById("anime3")

    var logInformId = document.getElementById("logInform")

    setTimeout(() => {

        logInformId.style.width = "30%"

        logInformId.style.height = "250px"

    }, 500)
    
    anime3Id.style.display = "flex"

    logInformId.addEventListener("keydown", function(event){
        if (event.key === 'Enter') {

            var usernameNextId = document.getElementById("usernameNext")

            var passwordNextId = document.getElementById("passwordNext")
        
            usernameNextId.style.left = "-100%"
        
            passwordNextId.style.left = "10%"

            event.preventDefault()
        }
    })

}

//For Log In Next
function usernext() {

    var usernameNextId = document.getElementById("usernameNext")

    var passwordNextId = document.getElementById("passwordNext")

    usernameNextId.style.left = "-100%"

    passwordNextId.style.left = "10%"

}
//For p back function

function back1() {

    var anime3Id = document.getElementById("anime3")

    var logInformId = document.getElementById("logInform")

    setTimeout(() => {

       anime3Id.style.display = "none"

    }, 1000)
    
    logInformId.style.width = "0"

    logInformId.style.height = "0"

}



function back2() {

    var usernameNextId = document.getElementById("usernameNext")

    var passwordNextId = document.getElementById("passwordNext")

    usernameNextId.style.left = "10%"

    passwordNextId.style.left = "100%"

}