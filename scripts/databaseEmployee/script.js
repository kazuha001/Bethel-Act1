document.getElementById("employees").addEventListener("submit", function(event){
    event.preventDefault()

   
    const formData = new FormData(this)

    fetch("php/submit1.php", {
        method: 'POST',
        body: formData
    })

    window.location.reload()

    alert("Submited Successfully")

})

function backF(){

    window.location.href = "http://localhost/Bethel-Act1-main/index.html"

}