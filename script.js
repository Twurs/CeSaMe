const getLocalDateTime = () => {
    const now = new Date();

    let minutes = now.getMinutes();
    let hours = now.getHours();

    minutes = Math.ceil(minutes / 30) * 30;

    if (minutes === 60) {
        minutes = 0;
        hours += 1;
    }

    return {
        year: now.getFullYear(),
        month: String(now.getMonth() + 1).padStart(2, "0"),
        day: String(now.getDate()).padStart(2, "0"),
        hours: String(hours).padStart(2, "0"),
        minutes: String(minutes).padStart(2, "0"),
    };
};

const localDateTime = getLocalDateTime();
const formattedDateTime = `${localDateTime.year}-${localDateTime.month}-${localDateTime.day}T${localDateTime.hours}:${localDateTime.minutes}`;
const datetimeInput = document.getElementById("timeField");
datetimeInput.min = formattedDateTime;


const validateForm = (form) => {
    const validation = {
        status: true,
        message: ""
    }
    if (!form.name) {
        validation.status = false
        validation.message = "El campo Nombre y Apellido no puede estar vacio"
    }

    if (!form.age) {
        validation.status = false
        validation.message = "El campo edad no puede estar vacio"
    }

    if (!form.doctor) {
        validation.status = false
        validation.message = "El campo Doctor no puede estar vacio"
    }

    if (!form.phone) {
        validation.status = false
        validation.message = "El campo telefono no puede estar vacio"
    }

    if (!form.email) {
        validation.status = false
        validation.message = "El campo email no puede estar vacio"
    }

    if (!form.schedule) {
        validation.status = false
        validation.message = "El campo fecha no puede estar vacio"
    }

    return validation
}


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

    const validation = validateForm(data)
    if (!validation.status) {
        alert(validation.message)
        submitButton.disabled = false
        return;
    }

    try {
        const response = await fetch('http://localhost:3000/saveQuestionForm', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const responseData = await response.json();
        if (!response.ok) {
            alert(responseData.message)
            submitButton.disabled = false
            return
        }

        e.target.reset()
        alert(responseData.message);
    }
    catch (error) {
        console.error("Hubo un error en la solicitud: ", error);
    }
    finally {
        submitButton.disabled = false;
    }
})



