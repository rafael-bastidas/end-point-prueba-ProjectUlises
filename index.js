const express = require('express'),
      path = require('path'),
      fs = require('fs'),

const https = require('https');

const app = express();

if (process.env.NODE_ENV === 'development') {
  console.log('Modo de DESARROLLO ACTIVADO');
  const cors = require('cors');
  app.use(cors());
}


app.use(express.urlencoded({extended: false}));
app.use(express.json());

// routes 
app.use('/citas', require('./routes/apiJson'));


// starting the server
app.listen(app.get('port'), () => {
  console.log(`server on port ${app.get('port')}`);
});
