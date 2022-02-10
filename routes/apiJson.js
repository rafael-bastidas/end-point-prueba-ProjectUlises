const router = require('express').Router();

const apiController = require('../controllers/apiJsonController');

router.get('/', apiController.getJson);

module.exports = router;
