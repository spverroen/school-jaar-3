import "./main.css";

function SidebarItems(props) {
    return (
        <div class="SidebarItems">
            <ul>Sidebar item { props.item }</ul>
        </div>
    )

}

export default SidebarItems;