import React, { useEffect, useState } from 'react';
import { addToDb, getStoredCart } from '../../utilities/fakedb';
import Cart from '../Cart/Cart';
import Product from '../Product/Product';
import './Shop.css';

const Shop = () => {

    //load data
    const [products, setProducts] =useState([]);
    //cart
    const [cart, setCart] = useState([]);
    const [displayProducts, setDisplayProducts] =useState([])
    
    useEffect(() => {
        fetch('./products.JSON')
        .then(res => res.json())
        .then(data => {
            setProducts(data);
            setDisplayProducts(data);
        });
    }, []);
    //side effect
    useEffect( () => {
        if(products.length){
            const savedCart = getStoredCart();
            const stroedCart = [];
        for(const key in savedCart){
            const addedProduct = products.find(product => product.key
                === key);
                if(addedProduct) {
                    const quantity = savedCart[key];
                    addedProduct.quantity = quantity;
                    stroedCart.push(addedProduct);
                }
             }
             setCart(stroedCart);

        }

    }, [products])
    //add handler
    const handleAddToCart = (product) => {
       const newCart = [...cart, product];
       setCart(newCart);
       addToDb(product.key);
    }
    const handelSearch = event =>{
        const searchText = event.target.value;
        const matchedProducts = products.filter
        (product => product.name.toLowerCase().
        includes(searchText.toLowerCase()));
        setDisplayProducts(matchedProducts);
        
    }
    //onchange eventhndlr for txtfld
    return (
        <div>
            <div className='search-container'>
              <input type="text"
              onChange={handelSearch}
              placeholder='Search Product'/>
            </div>
            <div className="shop-container">
          <div className="product-container">
              <h3>Products:{products.length} </h3>
              {
                  displayProducts.map(product => <Product
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
        </div>
    );
};

export default Shop;