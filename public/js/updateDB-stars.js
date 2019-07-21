const collection = firestore.collection("products");

submitEmailButton.addEventListener("click", function () {
    collection.doc("1803-00-91").set({
        "sku": "1803-00-91",
        "imgsNum": 3,
        "imgSrc": "../images/stars/",
        "name": "",
        "category": "Stars Wallstickers",
        "price": 15,
        "discountMode": "AMOUNT",
        "discountValue": 86
    })
        .then(function () {
            console.log("Document successfully written!");
        })
        .catch(function (error) {
            console.error("Error writing document: ", error);
        });
    collection.doc("1905-01-68-1").set({
        "sku": "1905-01-68-1",
        "imgsNum": 16,
        "imgSrc": "../images/stars/Wall-Decal-100-Bright-Stars/Wall-Decal-100-Bright-Stars1.webp",
        "name": "Wallpaper American Style Stars",
        "category": "Stars Wallstickers",
        "price": 15,
        "discountMode": "AMOUNT",
        "discountValue": 70
    });
    collection.doc("1905-02-61-1").set({
        "sku": "1905-02-61-1",
        "imgsNum": 8,
        "imgSrc": "../images/stars/Wall-Decal-100-Bright-Stars/Wall-Decal-100-Bright-Stars1.webp",
        "name": "Wall-Decal-100-Bright-Stars",
        "category": "Stars Wallstickers",
        "price": 15,
        "discountMode": "AMOUNT",
        "discountValue": 75
    });
});
