import React from 'react';
import { NavLink } from 'react-router-dom';
import { Link } from 'react-router-dom';

const Header = () => {
    return (
        <div>
            <NavLink activeStyle={{
              fontWeight: "bold",
              color: "red"
              }}to="/home">Home</NavLink>

            <NavLink activeStyle={{
                fontWeight: "bold",
               color: "red"
               }}to="/friends">Friends</NavLink>

            <NavLink activeStyle={{
                fontWeight: "bold",
                color: "red"
                 }}
               exact to="/about">About</NavLink>

            <NavLink activeStyle={{
              fontWeight: "bold",
              color: "red"}}
             exact to="/about/culture">Culture</NavLink>
        </div>
    );
};

export default Header;