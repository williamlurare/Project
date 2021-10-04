const express = require('express');
const bodyParser = require('body-parser');

const PromosRoute = express.Router();
const Promotions = require('../models/promotions')
PromosRoute.use(bodyParser.json());

PromosRoute.route('/')
.get((req,res,next) => {
    Promotions.find({})
    .then((promos) => {
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(promos);
    }, (err) => next(err))
    .catch((err) => next(err))
})
.post((req, res, next) => {
    Promotions.create(req.body)
    .then((promo) => {
        console.log('Promotions Created', promo);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(promo);
    }, (err) => next(err))
    .catch((err) => next(err))
})
.put((req,res,next) => {
    res.end('PUT is not supported on /promotions')
})
.delete((req,res,next) => {
    Promotions.deleteOne({})
    .then((resp) => {
     res.statusCode = 200;
     res.setHeader('Content-Type', 'application/json');
     res.json(resp);
    },(err) => next(err))
    .catch((err) => next(err))
})
PromosRoute.route('/:promotionsId')
.get((req,res,next) => {
    Promotions.findById(req.params.promotionsId)
    .then((promo) => {
        console.log('Promotions Created', promo);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(promo);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post((req,res,next) => {
    res.end('POST is not supported on /promotions/'+req.params.promotionsId)
})
.put((req, res, next) => {
    Promotions.findByIdAndUpdate(req.params.promotionsId, {
        $set: req.body
    }, { new: true })
    .then((promo) => {
        console.log('Promotions Created', promo);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(promo);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.delete((req,res,next) => {
    Promotions.findByIdAndRemove(req.params.promotionsId)
    .then((promod) => {
        console.log('Deleting Promotions', promod);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(promod);
    }, (err) => next(err))
    .catch((err) => next(err));
})

module.exports = PromosRoute;