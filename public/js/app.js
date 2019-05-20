const firebaseConfig = {
    apiKey: "AIzaSyBrc5-k7DLBqBb_Sikwr7gjYuym9DTzePA",
    authDomain: "stickers-center-2019.firebaseapp.com",
    databaseURL: "https://stickers-center-2019.firebaseio.com",
    projectId: "stickers-center-2019",
    storageBucket: "stickers-center-2019.appspot.com",
    messagingSenderId: "561200702492",
    appId: "1:561200702492:web:ab68b68c290064a6"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const firestore = firebase.firestore();

const docUsersRef = firestore.doc("users/5");
const docRef = firestore.collection("users");
const inputTextField = document.querySelector("#userEmailInput");
const submitEmailButton = document.querySelector("#submitEmailButton");
const addToCartButton = document.querySelector("#addToCartLoadButton");
const userEmailOutput = document.querySelector("#stayUpdatedOutput");
const loadDetailsButton = document.querySelector("#viewDetailsButton");

const docProductsRef = firestore.collection("products");
const outputName = document.querySelector("#productOutputName");

var productRef;
var productName;
var productSku;
var productPrice;
var productImageSrc;

submitEmailButton.addEventListener("click", function () {
    const textToSave = inputTextField.value;
    console.log("I'm going to save " + textToSave + " to Firestore");
    docUsersRef.set({
        email: textToSave
    }).then(function () {
        console.log("Email saved!");
    }).catch(function (error) {
        console.log("Got an error", error);
    })
});

addToCartButton.addEventListener("click", function () {
    docUsersRef.get().then(function (doc) {
        if (doc && doc.exists) {
            const myData = doc.data();
            userEmailOutput.innerText = "User Email is: " + myData.email;
        }
    }).catch(function (error) {
        console.log("Got an error: ", error);
    });
});


function setClickedProduct(id) {
    productRef = docProductsRef.doc(id);
    console.log("setClickedProduct function: productSku: ", id);
    productRef.get().then(function (doc) {
        if (doc && doc.exists) {
            const productData = doc.data();
            productImageSrc = productData.images;
            productSku = id;
            productName = productData.name;
            productPrice = productData.price;
            // prints info to confirm
            console.log("productSku: ", productSku);
            console.log("productName: ", productName);
            console.log("productImageSrc[0]: ", productImageSrc[0]);
        }
    }).catch(function (error) {
        console.log("Got an error: ", error);
    });

    console.log("setClickedProduct function: productSku: ", id);
    outputName.innerText = productName;
    document.getElementById("productOutputName").innerText = productName;
    //document.getElementById("productMainImageSrc").src = productImageSrc[0];
    //for (let i = 1; i < productImageSrc.length; i++) {
        //document.getElementById("productImageSrc" + i).src = productImageSrc[i];
    //}
}
