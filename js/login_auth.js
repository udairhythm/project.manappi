
// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js";
import { getDatabase, ref, push, set, onChildAdded, remove, onChildRemoved }
    from "https://www.gstatic.com/firebasejs/9.1.0/firebase-database.js";
// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyABZe7IrMNwk78wRDlJ6sYe_bsBAtxw6eM",
    authDomain: "manappi-88b8d.firebaseapp.com",
    projectId: "manappi-88b8d",
    storageBucket: "manappi-88b8d.appspot.com",
    messagingSenderId: "1022554962134",
    appId: "1:1022554962134:web:9123e0a6d25e5ce10db177"
};