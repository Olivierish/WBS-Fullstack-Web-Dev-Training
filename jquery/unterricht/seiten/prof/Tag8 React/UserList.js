import React from "react";
import { User } from "./User";

export default function UserList(props) {
  return (
    <div>
      {props.users.map((user) => (
        <User name={user.name} age={user.age} />
      ))}
    </div>
  );
}
