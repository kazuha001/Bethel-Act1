
document.getElementById("subform").addEventListener("submit", function(event){
    event.preventDefault()

    var passId = document.getElementById("pass").value

    var passconnId = document.getElementById("passconn").value

    

    if (passId === passconnId) {

    const formData = new FormData(this)

    fetch("php/submit.php", {
        method: 'POST',
        body: formData
    })

    window.location.reload()

    alert("Submited Successfully")

    } else {
        alert("Confirm Your Password")
    }
    

})
