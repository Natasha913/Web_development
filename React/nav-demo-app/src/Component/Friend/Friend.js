import React from 'react';

const Friend = (props) => {
    const {name, phone, website, address,email} = props.friend;
    
    return (
        <div>
            <h2>I am :{name}</h2>
            <p>Call me:{phone}</p>
            <p>Website:{website}</p>
            <p>Email:{email}</p>
            <p>I live in: {address.city}, {address.street}, {address.suite} </p>
            
        </div>
    );
};

export default Friend;