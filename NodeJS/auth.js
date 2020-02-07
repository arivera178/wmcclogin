// console.info("Hello World");
// console.log("SecondTest");

//Firebase serviceKey Auth
var admin = require("firebase-admin");
var serviceAccount = require("/key/serviceAccountKey.json");
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: "https://wmccloginauth.firebaseio.com"
});
