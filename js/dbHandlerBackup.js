const collection = firestore.collection("---");

submitButton.addEventListener("click", function () {
    collection.doc("1905-18-53-1").set({
        "name": "'Brick wallpaper in gray and vintage white",
        "collection": ["Home Wallpapers"],
        "sku": "1905-18-53-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    })
        .then(function () {
            console.log("Document successfully written!");
        })
        .catch(function (error) {
            console.error("Error writing document: ", error);
        });


    collection.doc("1905-15-68-1").set({
        "name": "A prestigious and modern geometric wallpaper",
        "collection": ["Home Wallpapers"],
        "sku": "1905-15-68-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1903-18-84").set({
        "name": "White Brick wallpaper",
        "collection": ["Home Wallpapers"],
        "sku": "1903-18-84",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-32-89-1").set({
        "name": "Geometric black and white triangles",
        "collection": ["Home Wallpapers, Kids Wallpapers"],
        "sku": "1905-32-89-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 75
    });


    collection.doc("0001").set({
        "name": "Wallpaper like marble tiles for a bedroom and a living room",
        "collection": ["Home Wallpapers"],
        "sku": "",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 85
    });


    collection.doc("0002").set({
        "name": "Wallpaper gorgeous and modern stripes",
        "collection": ["Home Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-31-80-1").set({
        "name": "Sky wallpaper clouds and stars",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-31-80-1",
        "price": 425,
        "discountMode": "AMOUNT",
        "discountValue": 110
    });


    collection.doc("0003").set({
        "name": "Luxurious striped wallpaper for a living room",
        "collection": ["Home Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0004").set({
        "name": "Wallpaper roll round modern and beautiful",
        "collection": ["Home Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-31-79-1").set({
        "name": "Cartoon wallpaper Puppy for children's rooms",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-31-79-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-26-80-1").set({
        "name": "Decorative and warm wallpaper for children's room",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-26-80-1",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 90
    });


    collection.doc("0005").set({
        "name": "Modern wallpaper strippers",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-18-04-1").set({
        "name": "Step up to a children's room",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-18-04-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0006").set({
        "name": "Wallpaper geometric triangles",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 415,
        "discountMode": "AMOUNT",
        "discountValue": 85
    });


    collection.doc("0007").set({
        "name": "High quality wallpaper in a variety of colors",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0008").set({
        "name": "A pastoral and romantic flower wallpaper",
        "collection": ["Home Wallpapers, Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-46-79-1").set({
        "name": "Wallpaper American Style Stars",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-46-79-1",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 70
    });


    collection.doc("0009").set({
        "name": "Wallpaper of a sailboat",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 500,
        "discountMode": "AMOUNT",
        "discountValue": 150
    });


    collection.doc("0010").set({
        "name": "Bear wallpaper for children's room",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0011").set({
        "name": "Wallpaper of a painted cat",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0012").set({
        "name": "Climb the stripes",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0013").set({
        "name": "Wallpaper thick hearts especially",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 419,
        "discountMode": "AMOUNT",
        "discountValue": 89
    });


    collection.doc("0014").set({
        "name": "Princess wallpaper for children's rooms",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 419,
        "discountMode": "AMOUNT",
        "discountValue": 89
    });


    collection.doc("0015").set({
        "name": "Wallpaper of a hot air balloon",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0016").set({
        "name": "Desktop wallpaper",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1905-20-51-1").set({
        "name": "Hello Kitty Cat Wallpaper",
        "collection": ["Kids Wallpapers"],
        "sku": "1905-20-51-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("0017").set({
        "name": "Wallpaper A ballet dancer for a childhood room",
        "collection": ["Kids Wallpapers"],
        "sku": "",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });


    collection.doc("1903-18-89").set({
        "name": "Two-tone vertical striped wallpaper for a children's room",
        "collection": ["Kids Wallpapers"],
        "sku": "1903-18-89",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });

});
