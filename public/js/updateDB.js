const collection = firestore.collection("products");

submitEmailButton.addEventListener("click", function () {
    collection.doc("1905-18-53-1").set({
        "sku": "1905-18-53-1",
        "imgsNum": 6,
        "imgSrc": "../images/wallpapers/home-wallpapers/gray-and-vintage-white-bricks-wallpaper/gray-and-vintage-white-bricks-wallpaper1.jpg",
        "name": "'Brick wallpaper in gray and vintage white",
        "category": "Home Wallpapers",
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
    collection.doc("1905-46-79-1").set({
        "sku": "1905-46-79-1",
        "imgsNum": 16,
        "imgSrc": "../images/wallpapers/kids-wallpapers/stars-wallpaper-american-style/stars-wallpaper-american-style1.webp",
        "name": "Wallpaper American Style Stars",
        "category": "Kids Wallpapers",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 70
    });
    collection.doc("1905-32-89-1").set({
        "sku": "1905-32-89-1",
        "imgsNum": 7,
        "imgSrc": "../images/wallpapers/kids-wallpapers/geometric-black-and-white-triangles-wallpaper/geometric-black-and-white-triangles-wallpaper1.jpg",
        "name": "Geometric black and white triangles",
        "category": "Home Wallpapers;Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 75
    });
    collection.doc("1905-31-80-1").set({
        "sku": "1905-31-80-1",
        "imgsNum": 10,
        "imgSrc": "../images/wallpapers/kids-wallpapers/sky-wallpaper-clouds-and-stars/sky-wallpaper-clouds-and-stars1.webp",
        "name": "Sky wallpaper clouds and stars",
        "category": "Kids Wallpapers",
        "price": 425,
        "discountMode": "AMOUNT",
        "discountValue": 110
    });
    collection.doc("1905-31-79-1").set({
        "sku": "1905-31-79-1",
        "imgsNum": 14,
        "imgSrc": "../images/wallpapers/kids-wallpapers/snoopy-puppy-kids-room-wallpaper/snoopy-puppy-kids-room-wallpaper1.jpg",
        "name": "Cartoon wallpaper Puppy for children's rooms",
        "category": "Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("1905-28-25-1").set({
        "sku": "1905-28-25-1",
        "imgsNum": 3,
        "imgSrc": "../images/wallpapers/home-wallpapers/vertical-striped-wallpaper-featured-pink1.jpg",
        "name": "Vertical striped wallpaper featured",
        "category": "Home Wallpapers",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 85
    });
    collection.doc("1905-26-80-1").set({
        "sku": "1905-26-80-1",
        "imgsNum": 10,
        "imgSrc": "../images/wallpapers/kids-wallpapers/warm-decorative-wallpaper-kids-room/warm-decorative-wallpaper-kids-room1.jpg",
        "name": "Decorative and warm wallpaper for children's room",
        "category": "Kids Wallpapers",
        "price": 400,
        "discountMode": "AMOUNT",
        "discountValue": 90
    });
    collection.doc("1905-21-84-1").set({
        "sku": "1905-21-84-1",
        "imgsNum": 3,
        "imgSrc": "../images/wallpapers/kids-wallpapers/wallpaper-kids-room-colorful-dots1.jpg",
        "name": "Colorful dots wallpaper for children's room",
        "category": "Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("1905-20-51-1").set({
        "sku": "1905-20-51-1",
        "imgsNum": 7,
        "imgSrc": "../images/wallpapers/kids-wallpapers/hello-kitty-cat-wallpaper/hello-kitty-cat-wallpaper1.jpg",
        "name": "Hello Kitty Cat Wallpaper",
        "category": "Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });

    collection.doc("1905-18-04-1").set({
        "sku": "1905-18-04-1",
        "imgsNum": 6,
        "imgSrc": "../images/wallpapers/kids-wallpapers/vertical-striped-wallpaper-kids-room/vertical-striped-wallpaper-kids-room1.jpg",
        "name": "Step up to a children's room",
        "category": "Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("1905-15-68-1").set({
        "sku": "1905-15-68-1",
        "imgsNum": 8,
        "imgSrc": "../images/wallpapers/home-wallpapers/prestigious-modern-geometric-wallpaper1.jpg",
        "name": "A prestigious and modern geometric wallpaper",
        "category": "Home Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("1904-04-65-1").set({
        "sku": "1904-04-65-1",
        "imgsNum": 3,
        "imgSrc": "../images/wallpapers/home-wallpapers/3d-bricks-wallpaper/3d-bricks-wallpaper1.jpg",
        "name": "3D Brick wallpaper",
        "category": "Home Wallpapers",
        "price": 85,
        "discountMode": "AMOUNT",
        "discountValue": 20
    });
    collection.doc("1903-18-89").set({
        "sku": "1903-18-89",
        "imgsNum": 6,
        "imgSrc": "../images/wallpapers/kids-wallpapers/two-tone-vertical-striped-wallpaper-for-children-room1.jpg",
        "name": "Two-tone vertical striped wallpaper for a children's room",
        "category": "Kids Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("1903-18-84").set({
        "sku": "1903-18-84",
        "imgsNum": 10,
        "imgSrc": "../images/wallpapers/home-wallpapers/bricks-white-wallpaper-classic1.webp",
        "name": "White Brick wallpaper",
        "category": "Home Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("0010").set({
        "sku": "0010",
        "imgsNum": 8,
        "imgSrc": "../images/wallpapers/kids-wallpapers/teddy-bear-wallpaper-for-kids-room/teddy-bear-wallpaper-for-kids-room1.jpg",
        "name": "Bear wallpaper for children's room",
        "category": "Kids Wallpapers",
        "price": 386,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("0003").set({
        "sku": "0003",
        "imgsNum": 3,
        "imgSrc": "../images/wallpapers/home-wallpapers/luxurious-stripes-classic-wallpaper-6colors/stripts-wallpaper-6colors-classic1.jpg",
        "name": "Luxurious striped wallpaper for a living room",
        "category": "Home Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
    collection.doc("0002").set({
        "sku": "0002",
        "imgsNum": 4,
        "imgSrc": "../images/wallpapers/home-wallpapers/gorgeous-modern-stripes-wallpaper-4colors/gorgeous-modern-wallpaper-4colors-stripes1.jpg",
        "name": "Wallpaper gorgeous and modern stripes",
        "category": "Home Wallpapers",
        "price": 385,
        "discountMode": "AMOUNT",
        "discountValue": 86
    });
});
