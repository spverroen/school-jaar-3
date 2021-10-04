import "./mystyle.module.css";

function MyHeader() {
    const classname = "bigblue";
    return (
        <div>
        <h1 className={classname}>Hello Style!</h1>
        <p>Add a little style!</p>
        </div>
    );
}

export default MyHeader;