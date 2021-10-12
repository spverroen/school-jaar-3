import "./main.css";
import "../index.css";
import NavbarItem from "./NavbarItem";

function Header() {
    let json = ["Home", "About", "Contact"];
    let jsx = json.map((item) => <span>{item}</span>);
    return (
        <div>
            { jsx }
        </div>
    )

}

export default Header;