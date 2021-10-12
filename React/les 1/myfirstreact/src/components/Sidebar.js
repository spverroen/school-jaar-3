import "./main.css";
import NavbarItem from "./NavbarItem";
import SidebarItems from "./SidebarItems";

function Sidebar() {
    const items = ['nummer 1', 'nummer 2', 'nummer 3', 'nummer 4']
    return (
        <div class="sidebar">
            {items.map((items) => <SidebarItems item={items} />)}
        </div>
    )

}

export default Sidebar;