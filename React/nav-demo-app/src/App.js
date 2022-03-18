import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Link, Route, Routes } from 'react-router-dom';
import Friends from './Component/Friends/Friends';
import Home from './Component/Home/Home';
import About from './Component/About/About';
import Header from './Component/Header/Header';

function App() {
  return (
    <div className="App">
      <a href="/home">Home</a>
     <BrowserRouter>
       <Header></Header>
       <Routes>
         <Route path='/friends'>
           <Friends></Friends>
         </Route>
         <Route path='/home'>
           <Home></Home>
         </Route>
         <Route path='/about'>
           <About></About>
         </Route>
       </Routes>
     </BrowserRouter>
    </div>
  );
}

export default App;
