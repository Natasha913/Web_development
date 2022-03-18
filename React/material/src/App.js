import logo from './logo.svg';
import './App.css';
import Home from './components/Home/Home';
import About from './components/About/About';
import Friends from './components/Friends/Friends';
import { BrowserRouter as Router, Link, Route,Switch} from 'react-router-dom';
import Header from './components/Header/Header';
import FriendDetail from './components/FriendDetail/FriendDetail';
import Culture from './components/Culture/Culture';



function App() {
  return (
    <div className="App">
       <Router>
        <Header></Header>
        <Switch>
        <Route exact path="/">
             <Home></Home>
           </Route>
           <Route path="/friends" >
             <Friends></Friends>
           </Route >
           <Route path="/home">
             <Home></Home>
           </Route>
           <Route exact path="/about/culture">
             <Culture></Culture>
           </Route>
           <Route path="/friend/:friendId">
             <FriendDetail></FriendDetail>
           </Route>
           <Route exact path="/about">
             <About></About>
           </Route>
        </Switch>
           
      </Router>
    </div>
  );
}

export default App;
