import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Home from "./pages/Home";
import Blogs from "./pages/Blogs";
import Contact from "./pages/Contact";
import Footer from "./components/Footer";
import "./index.css";

export default function App() {
  return (
    <Router>
      <div className="h-screen flex flex-col">
        <div class="list" className="flex flex-row justify-between items-center bg-gray-600 p-4">
          <div>
            <Link to="/">Home</Link>
          </div>
          <div>
            <Link to="/blogs">Blog Articles</Link>
          </div>
          <div>
            <Link to="/contact">Contact Me</Link>
          </div>
        </div>

        <Switch>
          <Route exact path="/">
            <Home />
          </Route>
          <Route path="/blogs">
            <Blogs />
          </Route>
          <Route path="/contact">
            <Contact />
          </Route>
        </Switch>
        <Footer />
      </div>
    </Router>
  );
}

ReactDOM.render(<App />, document.getElementById("root"));
