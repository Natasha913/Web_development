import logo from './logo.svg';
import './App.css';

function App() { 
  const cinemas = [
    {nayok :'Kalam', naika:'Shila'},
    {nayok :'Korim', naika:'Ritu'},
    {nayok :'Rohim', naika:'Tina'},
    {nayok :'Ripu', naika:'Mila'}
  ]
  return (
    <div className="App">
      <p><u>Simillar in look different in data</u></p>
      <br></br>
      
     {
       cinemas.map(cinema => <Cinema nayok={cinema.nayok} naika={cinema.naika}></Cinema>)
     }
    </div>
  );
}
/*<Person name ="Rubel" nametu="Rina"></Person>
<Person name="Korim" nametu="Shila"></Person>
<Person name="Kabul" nametu="Tina"></Person>*/


//own html tag
function Cinema(props){
  return (
    <div className='person'>
    <h1>Name: {props.nayok} </h1>
    <h4>Name: {props.naika}</h4>
  </div>
  );
}

export default App;
