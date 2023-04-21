import React from "react";

export default function User(props) {
  return (
    <div>
      <h2>Bücherliste</h2>
      <p>{props.titel} von {props.autor} Jahre alt</p>
      <div>{props.inhalt} </div> 
      <p>Seitenanzahl: {props.seiten}</p>
    </div>
  );
}
