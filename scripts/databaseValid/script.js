
document.getElementById("subform").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

    fetch("php/submit.php", {
        method: 'POST',
        body: formData
    })

})

document.getElementById("logInform").addEventListener("submit", function(event) {
    event.preventDefault()

        const formData = new FormData(this)

        fetch("php/login.php", {
            method: "POST",
            body: formData
        })

})