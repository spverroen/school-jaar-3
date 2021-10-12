
import './App.css';
import Header from './components/Header.js';
import Footer from './components/Footer.js';
import Sidebar from './components/Sidebar.js';
import Content from './components/Content.js';

function App() {
  return (
    <div className="App">
      <Header />
      <div>
        <Content />
      </div>
      <Footer />
    </div>
  );
}

export default App;
