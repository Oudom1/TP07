//module
const express = require('express');

const app = express();
const fs = require('fs')


//import file render
app.get('/', (req, res) => {
    fs.readFile('./detail/index.html', 'utf8', (err, data) => {
        if (err) {
            console.error(err)
            return
        }
        res.send(data);
    })
})

app.get('/detail', (req, res) => {
    fs.readFile('./detail/view/detail.html', 'utf8', (err, data) => {
        if (err) {
            console.error(err)
            return
        }
        res.send(data);
    })
})


//connect and open in browser
app.listen(3000, () => {
    console.log("http://localhost:3000/");
})