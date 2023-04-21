import React from "react";

export function User(props) {
  return (
    <div>
      <h2>Freundesliste</h2>
      <p>
        {" "}
        {props.name} ist {props.age} Jahre alt
      </p>
    </div>
  );
}
