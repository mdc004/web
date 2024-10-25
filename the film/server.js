const express = require('express')
const app = express()

app.get('/films', function (req, res) {
    res.send('Hello World')
})

app.listen(3000)