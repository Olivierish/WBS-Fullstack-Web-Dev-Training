import React from "react";

export default function Visitenkarte(props) {
  return (
    <div>
      <h1>Angaben zur Person </h1>
      <h2>
        {props.vorname} {props.famname}
      </h2>
      <p>{props.anschrift}</p>
      <hr />
    </div>
  );
}
