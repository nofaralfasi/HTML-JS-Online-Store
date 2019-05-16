// const firebase = require("firebase");
// // Required for side-effects
// require("firebase/firestore");

// initialize firebase
firebase.initializeApp({
    apiKey: "AIzaSyBrc5-k7DLBqBb_Sikwr7gjYuym9DTzePA",
    authDomain: "stickers-center-2019.firebaseapp.com",
    databaseURL: "https://stickers-center-2019.firebaseio.com",
    projectId: "stickers-center-2019",
    storageBucket: "stickers-center-2019.appspot.com",
    messagingSenderId: "561200702492",
    appId: "1:561200702492:web:ab68b68c290064a6"
});
// firebase.initializeApp(firebaseConfig);
var firestore = firebase.firestore();

const docRef = firestore.doc("users/2");
const outputHeader = document.querySelector("#stayUpdated");
const inputTextField = document.querySelector("#userEmail");
const submitButton = document.querySelector("#submitEmail");

submitButton.addEventListener("click", function () {
    const textToSave = inputTextField.value;
    console.log("I'm going to save " + textToSave + " to Firestore");
    docRef.set({
        email: textToSave
    }).then(function () {
        console.log("Email saved!");
    }).catch(function (error) {
        console.log("Got an error", error);
    })
});
