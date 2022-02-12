import React, { useEffect, useState } from 'react';
import Cart from '../Cart/Cart';
import Product from '../Product/Product';
import './Shop.css';

const Shop = () => {

    //load data
    const [product, setProducts] =useState([]);
    //cart
    const [cart, setCart] = useState([]);
    
    useEffect(() => {
        fetch('./products.JSON')
        .then(res => res.json())
        .then(data => setProducts(data));
    }, [])
    //add handler
    const handleAddToCart = (product) => {
       const newCart = [...cart, product];
       setCart(newCart);
    }
    return (
        <div className="shop-container">
          <div className="product-container">
              <h3>Products:{product.length} </h3>
              {
                  product.map(product => <Product
                  key={product.key}
                     product={product}
                     handleAddToCart={handleAddToCart}
                     >
                     </Product>)
              }
          </div>
          <div className="cart-container">
              <Cart cart={cart}></Cart>
          </div>
        </div>
    );
};

export default Shop;