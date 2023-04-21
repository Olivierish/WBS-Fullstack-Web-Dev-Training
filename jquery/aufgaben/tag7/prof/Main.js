import React from 'react';

export function Main() {
    return(
        <main>
            <h2>Folgenden Termine sind geplant:</h2>
            <table>
                <tr>
                    <td>22.04.2023</td>
                    <td>17.00 Uhr</td>
                    <td>Musical in Berlin</td>
                </tr>
                <tr>
                    <td>01.05.2023</td>
                    <td>10.00 Uhr</td>
                    <td>Treffen im Park</td>
                </tr>
                <tr>
                    <td>08.05.2023</td>
                    <td>17.00 Uhr</td>
                    <td>Arzttermin</td>
                </tr>
            </table>
            <p>Zu diesen Terminen bin iich nicht erreichbar.</p>
            <p>Treffen im Park nur bei schönen Wetter!</p>
        </main>
    );
}