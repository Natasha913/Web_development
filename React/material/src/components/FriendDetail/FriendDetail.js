import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const FriendDetail = () => {
    const {friendId} = useParams();
    const [friend, setFriend] = useState({})
    useEffect(()=>{
        const url =`https://jsonplaceholder.typicode.com/users/${friendId}`;
        fetch(url)
           .then(res => res.json())
           .then(data =>setFriend(data));
    },[])
    return (
        <div>
            <h3>Friend Detail of : {friendId}</h3>
            <p>{friend.name}</p>
            <p>{friend.phone}</p>
            <p>{friend.website}</p>
            <p>Work at : {friend.company?.name}</p>

        </div>
    );
};

export default FriendDetail;