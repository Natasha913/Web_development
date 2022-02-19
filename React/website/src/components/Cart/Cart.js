import React from 'react';
import './Cart.css'

const Cart = (props) => {
    const { cart } = props;

    let totalQuantity = 0;
    let total = 0;
    for(const product of cart){
        if(!product.quantity){
            product.quantity = 1;
        }
        total =total + product.price * product.quantity;
        totalQuantity = totalQuantity + product.quantity;
    }
    const shipping = total > 0 ? 15 : 0;
    const tax = (total + shipping) *0.5;
    const grandTotal = total + shipping + tax;
    return (
        <div>
             <h3 className='line'><u>Order Summary </u></h3>
             <h5 className='ordr'>Items ordered: {totalQuantity} </h5>

             <p >Total:{total.toFixed(2)}</p>
             <p>Shipping: {shipping} </p>
             <p>tax: {tax.toFixed(2)} </p>
             <hr></hr>
             <h5>Grand Total: {grandTotal.toFixed(2)}</h5>
              
        </div>
    );
};

export default Cart;