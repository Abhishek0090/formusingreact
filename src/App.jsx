import logo from './logo.svg';
import './App.css';

import Birla1 from './Birla1';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link,
  Routes
} from "react-router-dom";
import Birla_2 from './Birla_2';



function App() {
    const onclick =  ()=>{
      
    }
  return (
    <>

    <Router>

    <div className="App">
    
        <div className="left_section">
                    <select className="form-select"  style = {{width:"80%"}}  aria-label="Default select example">
        <option defaultValue>Select Patient</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
        <br/>

            <select className="form-select" id = "select_form"  style = {{width:"80%"}}  aria-label="Default select example">
                <option defaultValue="birla" >Select Category</option>
                <option  value="birla">Aditya Birla</option>
                <option value="Alankit">Alankit</option>
                <option value="Anmol">Anmol</option>
                <option value="Apollo">Apollo</option>
            
            </select>
 
         </div>


    <div className="top_section col-2 mt-2 " >
            <button className="btn btn-warning " id="Next"><Link to="birla1">Next</Link></button>
            <button className="btn btn-dark" >Prev</button>
                         
<button className="btn btn-success">
    <input type="hidden"  name="post_id" id="post_id"/>  
    AutoSave
</button>        
             <Birla1/>         

   <Routes>
   <Route exact path="/" component={ <Birla1 value="birla"/>}/>
   <Route exact path="birla2" component={ <Birla_2/>}/>

   </Routes>
    </div>

    </div>
    </Router>
    </>
  );
}

export default App;
