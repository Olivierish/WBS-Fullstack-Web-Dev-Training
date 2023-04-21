import React from "react";
import UserList from "./components/UserList";

function App() {
  const users = [
    { name: "Gerald Reinhardt", age: 56 },
    { name: "Biene Maja", age: 35 },
    { name: "Winnie Puh", age: 65 },
    { name: "Luise Koschmidder", age: 36 }
  ];

  return (
    <div>
      <h1 className="maria">Benutzer Liste</h1>
      <UserList users={users} />
    </div>
  );
}

export default App;
