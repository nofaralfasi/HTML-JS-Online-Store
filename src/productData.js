
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

FriendlyEats.prototype.addProduct = function(data) {
    var collection = firebase.firestore().collection('products');
    return collection.add(data);
};

FriendlyEats.prototype.getAllProducts = function(renderer) {
    var query = firebase.firestore()
        .collection('products')
        .orderBy('avgRating', 'desc')
        .limit(50);

    this.getDocumentsInQuery(query, renderer);
};

FriendlyEats.prototype.getDocumentsInQuery = function(query, renderer) {
    query.onSnapshot(function(snapshot) {
        if (!snapshot.size) return renderer.empty(); // Display "There are no products".

        snapshot.docChanges().forEach(function(change) {
            if (change.type === 'removed') {
                renderer.remove(change.doc);
            } else {
                renderer.display(change.doc);
            }
        });
    });
};

FriendlyEats.prototype.getProduct = function(id) {
    return firebase.firestore().collection('products').doc(id).get();
};


FriendlyEats.prototype.getFilteredProducts = function(filters, renderer) {
    var query = firebase.firestore().collection('products');

    if (filters.category !== 'Any') {
        query = query.where('category', '==', filters.category);
    }

    if (filters.city !== 'Any') {
        query = query.where('city', '==', filters.city);
    }

    if (filters.price !== 'Any') {
        query = query.where('price', '==', filters.price.length);
    }

    if (filters.sort === 'Rating') {
        query = query.orderBy('avgRating', 'desc');
    } else if (filters.sort === 'Reviews') {
        query = query.orderBy('numRatings', 'desc');
    }

    this.getDocumentsInQuery(query, renderer);
};

FriendlyEats.prototype.addRating = function(productID, rating) {
    var collection = firebase.firestore().collection('products');
    var document = collection.doc(productID);
    var newRatingDocument = document.collection('ratings').doc();

    return firebase.firestore().runTransaction(function(transaction) {
        return transaction.get(document).then(function(doc) {
            var data = doc.data();

            var newAverage =
                (data.numRatings * data.avgRating + rating.rating) /
                (data.numRatings + 1);

            transaction.update(document, {
                numRatings: data.numRatings + 1,
                avgRating: newAverage
            });
            return transaction.set(newRatingDocument, rating);
        });
    });
};
