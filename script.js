import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js';
import { getFirestore, collection, addDoc } from 'https://www.gstatic.com/firebasejs/9.19.1/firebase-firestore.js';

const firebaseConfig = {
    apiKey: "AIzaSyCIw4_0CEqyrRfs-lbN3RAk3SaFwQaOTAE",
    authDomain: "cesame-bfe8b.firebaseapp.com",
    projectId: "cesame-bfe8b",
    storageBucket: "cesame-bfe8b.appspot.com",
    messagingSenderId: "14152844294",
    appId: "1:14152844294:web:43ad0232fa64281b336f87",
    measurementId: "G-G77LC6B2Y5"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

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
        await addDoc(collection(db, "questions"), data);
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



