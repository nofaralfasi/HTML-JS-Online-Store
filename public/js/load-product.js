const producNameHeader = document.querySelector("#productOutputName");
var productRef;
var productName;
var productSku;
var productPrice;
var productImageSrc;


function loadProduct(id) {
    productRef = docProductsRef.doc(id);
    productRef.get().then(function (doc) {
        if (doc && doc.exists) {
            const productData = doc.data();
            productImageSrc = productData.images;
            productSku = productData.sku;
            productName = productData.name;
            productPrice = productData.price;
            // prints info to confirm
            console.log("I'm suppose to get the id=1904-04-65-1. The id I really got is: id=" + id);
            console.log("productSku: ", productSku);
            console.log("productName: ", productName);
            console.log("productPrice: ", productPrice);
            console.log("productImageSrc[0]: ", productImageSrc[0]);
            console.log("productImageSrc[1]: ", productImageSrc[1]);

        }
    }).catch(function (error) {
        console.log("Got an error: ", error);
    });
}

function loadProduct1(id) {
    console.log("loadProduct function: productSku: ", id);
    document.getElementById("productMainImageSrc").src = productImageSrc[0];
    for (let i = 1; i < productImageSrc.length; i++) {
        document.getElementById("productImageSrc" + i).src = productImageSrc[i];
    }
}
