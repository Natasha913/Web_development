import logo from './logo.svg';
import './App.css';
import { useState } from 'react';

function App() {
  return (
    <div className="App">
      <Counter></Counter>
     
    </div>
  );
}
function Counter(){
  const [count, setCount] = useState(1);
  const handleIncrease = () => {
    const newCount = count + 1;
    setCount(newCount);
  };

  return(
    <div>
      <h1>Count :{count}</h1>
      <button onClick={handleIncrease}>Increase</button>
    </div>
  )
}

export default App;
