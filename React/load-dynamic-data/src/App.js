import logo from './logo.svg';
import './App.css';
import { useEffect, useState } from 'react';

function App() {
  return (
    <div className="App">
      <ExternalUser></ExternalUser>
     
    </div>
  );
}
function ExternalUser() {
  const [users, setUsers] = useState([]);
  useEffect(()=>{
    fetch('https://jsonplaceholder.typicode.com/users')
       .then(res => res.json())
       .then(data => setUsers(data))
  }, [])
  return (
    <div>
      <h3>External User</h3>
      {
        users.map(user => <User name={user.name} email={user.email}></User>)
      }
    </div>
  )
}
function User(props){
  return (
    <div>
      <h4>Name: {props.name} </h4>
      <p>Email: {props.email} </p>
    </div>
  )
}
export default App;
