const mongoose = require('mongoose');
require('dotenv').config()
const url =  "mongodb+srv://sanidhya:Sunny2020@cluster0.l3fstjc.mongodb.net/";

const database = module.exports = ()=>{
    const connectionParams={
        useNewUrlParser: true,
        useUnifiedTopology: true
    }
    try {
        mongoose.connect(url, connectionParams)
        console.log("Database Connected Successfully!")
    } catch (error) {
        console.log(error)
        console.log("Database Connection Failed!")
    }
}