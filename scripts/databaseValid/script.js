
document.getElementById("subform").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

    fetch("php/submit.php", {
        method: 'POST',
        body: formData
    })

    .then(response => response.json()) // Assuming the server responds with JSON
            .then(data => {
                console.log('Success:', data);
                // Optionally handle success
                alert('Form submitted successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                // Optionally handle errors
                alert('Error submitting form.');
            });

})

document.getElementById("logInform").addEventListener("submit", function(event) {
    event.preventDefault()

        const formData = new FormData(this)

        fetch("php/login.php", {
            method: "POST",
            body: formData
        })

        .then(response => response.json()) // Assuming the server responds with JSON
            .then(data => {
                console.log('Success:', data);
                // Optionally handle success
                alert('Form submitted successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                // Optionally handle errors
                alert('Error submitting form.');
            });
})