import React from "react";
import BuchListe from "./components/BuchListe";

function App() {
  const buecher = [
    { titel: "Es", autor:' Stephen King' , inhalt: "Ein Clown mit Rotem Ballon treibt sein Unwesen", seiten: 801 },
    { titel: "Herr der Ringe", autor:'J.R.R Tolkin' , inhalt: "Frodo soll den Ring vernichten", seiten: 1345  },
    { titel: "Con Gusto A2", autor:'Team' , inhalt: "Spanisch Training", seiten: 221 },
    { titel: "Der Schwarm", autor:'Frank Schätzing' , inhalt: "", seiten: 374 },
    { titel: "Romeo und Julia", autor:'William S.' , inhalt: "", seiten: 125 },
    { titel: "Hummeldumm", autor:'Tommy Jaud' , inhalt: "Eine lustige Reisebeschreibung...", seiten: 233 },

  ];

  return (
    <div>
      <h1>Benutzer Liste</h1>
      <BuchListe buecher={buecher} />
    </div>
  );
}

export default App;
