import React from 'react';
import { Link } from 'react-router-dom';
import { useHistory } from 'react-router-dom/cjs/react-router-dom.min';

const Friend = (props) => {
    const {id, name, phone, website, address,email} = props.friend;
   
    const history = useHistory();

    const url =`/friend/${id}`;

    const handleFriendClick = () =>{
        history.push(`/friend/${id}`);
    }
    return (
        <div>
            <h2>{id} I am :{name}</h2>
            <p>Call me:{phone}</p>
            <p>Website:{website}</p>
            <p>Email:{email}</p>
            <p>I live in: {address.city}, {address.street}, {address.suite} </p>
            <Link to={url}>Visit me</Link>
            <br/>
            <button onClick={handleFriendClick}>Visit me</button>
        </div>
    );
};

export default Friend;