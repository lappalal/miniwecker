// modules ===========================================================================
let express = require('express');
let app = express();
let bodyParser = require('body-parser');
let methodOverride = require('method-override');

// configuration =====================================================================

let db = require('./config/db');

// set the port
let port = process.env.PORT || 9090;

// connect to mongoDB database
// uncomment after you enter in your own credentials in config/db.js
// mongoose.connect(db.url);

// get all data of the body (POST) parameters
// parse application/json
app.use(bodyParser.json());

// parse application/vnd.api+json as json
app.use(bodyParser.json({ extended: true }));

// override with the X-HTTP-Method-Override header in the request. simulate DELETE/PUT
app.use(methodOverride('X-HTTP-Method-Override'));

// routes ============================================================================
require('./app/routes')(app); // configure routes

// start app =========================================================================
//startup our app at http://localhost:9090
app.listen(port);

// shoutout to the user

console.log('Server up and running on port: ' + port);

//export app
exports = module.exports = app;
