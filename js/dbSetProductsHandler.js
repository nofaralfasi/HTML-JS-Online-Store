// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: '### FIREBASE API KEY ###',
    authDomain: '### FIREBASE AUTH DOMAIN ###',
    projectId: '### CLOUD FIRESTORE PROJECT ID ###'
});

var db = firebase.firestore();

// Add a new document in collection "cities"
db.collection("products").doc("LA").set({
    name: "Los Angeles",
    state: "CA",
    country: "USA"
})
    .then(function() {
        console.log("Document successfully written!");
    })
    .catch(function(error) {
        console.error("Error writing document: ", error);
    });


db.collection("products").doc("1905-18-53-1").set({
    "name": "'Brick wallpaper in gray and vintage white",
    "collection": "Home Wallpapers",
    "sku": "1905-18-53-1",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
})
    .then(function() {
        console.log("Document successfully written!");
    })
    .catch(function(error) {
        console.error("Error writing document: ", error);
    });


db.collection("products").doc("1905-15-68-1").set({
    "name": "A prestigious and modern geometric wallpaper",
        "collection": "Home Wallpapers",
        "sku": "1905-15-68-1",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
});


db.collection("products").doc("1903-18-84").set({
    "name": "White Brick wallpaper",
    "collection": "Home Wallpapers",
    "sku": "1903-18-84",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc("").set({
    "name": "Geometric black and white triangles",
    "collection": "Home Wallpapers;Kids Wallpapers",
    "sku": "1905-32-89-1",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 75
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper like marble tiles for a bedroom and a living room",
    "collection": "Home Wallpapers",
    "sku": "",
    "price": 400,
    "discountMode": "AMOUNT",
    "discountValue": 85
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper gorgeous and modern stripes",
    "collection": "Home Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Sky wallpaper clouds and stars",
    "collection": "Kids Wallpapers",
    "sku": "1905-31-80-1",
    "price": 425,
    "discountMode": "AMOUNT",
    "discountValue": 110
});


db.collection("products").doc(" ").set({
    "name": "Luxurious striped wallpaper for a living room",
    "collection": "Home Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper roll round modern and beautiful",
    "collection": "Home Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Cartoon wallpaper Puppy for children's rooms",
    "collection": "Kids Wallpapers",
    "sku": "1905-31-79-1",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Decorative and warm wallpaper for children's room",
    "collection": "Kids Wallpapers",
    "sku": "1905-26-80-1",
    "price": 400,
    "discountMode": "AMOUNT",
    "discountValue": 90
});


db.collection("products").doc(" ").set({
    "name": "Modern wallpaper strippers",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Step up to a children's room",
    "collection": "Kids Wallpapers",
    "sku": "1905-18-04-1",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper geometric triangles",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 415,
    "discountMode": "AMOUNT",
    "discountValue": 85
});


db.collection("products").doc(" ").set({
    "name": "High quality wallpaper in a variety of colors",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "A pastoral and romantic flower wallpaper",
    "collection": "Home Wallpapers;Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper American Style Stars",
    "collection": "Kids Wallpapers",
    "sku": "1905-46-79-1",
    "price": 400,
    "discountMode": "AMOUNT",
    "discountValue": 70
});




db.collection("products").doc(" ").set({
    "name": "Wallpaper of a sailboat",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 500,
    "discountMode": "AMOUNT",
    "discountValue": 150
});


db.collection("products").doc(" ").set({
    "name": "Bear wallpaper for children's room",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper of a painted cat",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Climb the stripes",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper thick hearts especially",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 419,
    "discountMode": "AMOUNT",
    "discountValue": 89
});


db.collection("products").doc(" ").set({
    "name": "Princess wallpaper for children's rooms",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 419,
    "discountMode": "AMOUNT",
    "discountValue": 89
});



db.collection("products").doc(" ").set({
    "name": "Wallpaper of a hot air balloon",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Desktop wallpaper",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Hello Kitty Cat Wallpaper",
    "collection": "Kids Wallpapers",
    "sku": "1905-20-51-1",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Wallpaper A ballet dancer for a childhood room",
    "collection": "Kids Wallpapers",
    "sku": "",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({
    "name": "Two-tone vertical striped wallpaper for a children's room",
    "collection": "Kids Wallpapers",
    "sku": "1903-18-89",
    "price": 385,
    "discountMode": "AMOUNT",
    "discountValue": 86
});


db.collection("products").doc(" ").set({

});


