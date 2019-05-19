// const firebase = require("firebase");
// // Required for side-effects
// require("firebase/firestore");

const firestore = firebase.firestore();

const docRef = firestore.doc("users/3");
const docProductsRef = firestore.collection("products");
const outputHeader = document.querySelector("#stayUpdatedOutput");
const inputTextField = document.querySelector("#userEmailInput");
const submitButton = document.querySelector("#submitEmailButton");
const loadButton = document.querySelector("#addToCartLoadButton");
var productRef;
var productName;
var productSku;
var productPrice;
var productImageSrc;

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

loadButton.addEventListener("click", function () {
    docRef.get().then(function (doc) {
        if (doc && doc.exists) {
            const myData = doc.data();
            outputHeader.innerText = "User Email is: " + myData.email;
        }
    }).catch(function (error) {
        console.log("Got an error: ", error);
    });
});


function setClickedProduct(id) {
    productRef = docProductsRef.doc(id);
    productRef.get().then(function (doc) {
        if (doc && doc.exists) {
            const productData = doc.data();
            productImageSrc = productData.images;
            productSku = productData.sku;
            productName = productData.name;
            productPrice = productData.price;
            loadProduct(id);
            // prints info to confirm
            console.log("I'm suppose to get the sku of this product. I really got: sku=" + id);
            console.log("productSku: ", productSku);
            console.log("productName: ", productName);
            console.log("productPrice: ", productPrice);
            console.log("productImageSrc[0]: ", productImageSrc[0]);
            console.log("productImageSrc[1]: ", productImageSrc[1]);
        }
    }).catch(function (error) {
        console.log("Got an error: ", error);
    });
    console.log("productSku: ", id);
    document.getElementById("productMainImageSrc").src = productImageSrc[0];
    for (let i = 1; i < productImageSrc.length; i++) {
        document.getElementById("productImageSrc"+i).src = productImageSrc[i];

    }
}


function loadProduct(id) {

    // productImageSrc2
}
