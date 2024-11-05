const form = document.getElementById("informationForm")
form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const submitButton = document.getElementById("sendButton");
    submitButton.disabled = true;

    const formData = new FormData(e.target);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    try {
        const response = await fetch('http://localhost:3000/saveQuestionForm', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        if (!response.ok) {
            throw new Error('Error en la solicitud');
        }

        e.target.reset()
        alert("Su solicitud ha sido enviada con éxito");
    }
    catch (error) {
        console.error("Hubo un error en la solicitud: ", error);
    }
    finally {
        submitButton.disabled = false;
    }
})



