import React from "react";

class Car extends React.Component {
    render() {
      return <h2>I am a {this.props.carInfo.car}, {this.props.carInfo.msg}!</h2>;
    }
  }


export default Car;
