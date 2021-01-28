// const fs = require('fs');
const path = require('path');

// const PDFDocument = require('pdfkit');
// const stripe = require('stripe')('sk_test_BMD9aaviqJzK0hlROg2KMRbD');

const Product = require('../models/product');


exports.getIndex = (req, res, next) => {
    res.render('index', {
      pageTitle: 'Home | Quickpenny',
      path: '/index',
      
     });
  };

exports.getProducts = (req, res, next) => {
  Product.find()
  .then(products => {
    console.log(products);
  res.render('shop/products',{
    prods: products,
    pageTitle: 'Products | Quickpenny',
      path: '/products',
     });
    })
    .catch(err => {
      console.log(err);
    });
 
  };

  exports.getProduct = (req, res, next) => {
    const prodId = req.params.productId;
    Product.findById(prodId)
      .then(product => {
        res.render('shop/product-detail', {
          product: product,
          pageTitle: product.title,
          path: '/products'
        });
      })
      .catch(err => {
        const error = new Error(err);
        error.httpStatusCode = 500;
        return next(error);
      });
  };  

exports.getElectronic =   (req, res, next) => {
    res.render('shop/electronics', {
      pageTitle: 'Electronics | Quickpenny',
      path: '/electronics',
     });
  };

exports.getAboutUs = (req, res, next) => {
    res.render('aboutUs', {
      pageTitle: 'About Us',
      path: '/aboutUs',
     });
  }

