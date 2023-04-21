import React from "react";
import Buch from "./Buch";

export default function BuchListe(props) {
  return (
    <div>
      {props.buecher.map((buch) => (
        <Buch titel={buch.titel} autor={buch.autor}  inhalt={buch.inhalt} seiten={buch.seiten}  />
      ))}
    </div>
  );
}
