import React from "react";
import Car from "./Car";

  
  class Garage extends React.Component {
    render() {
      return (
        <div>
        <h1>Who lives in my Garage?</h1>
        <Car carInfo = { {car: "Ford", msg: "Bitch"} } />
        </div>
      );
    }
  }

export default Garage;
