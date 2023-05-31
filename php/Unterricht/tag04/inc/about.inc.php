<h2>About Design</h2>  
<?php
$daten = array(
    array(
        'anrede' => 'Mr.',
        'name' => 'John Doe',
        'city' => 'New York',
        'hobbies' => array('reading', 'hiking')
    ),
    array(
        'anrede' => 'Mrs.',
        'name' => 'Jane Smith',
        'city' => 'London',
        'hobbies' => array('painting', 'swimming', 'photography')
    ),
    array(
        'anrede' => 'Mr.',
        'name' => 'Michael Johnson',
        'city' => 'Sydney',
        'hobbies' => array('playing guitar', 'traveling')
    ),
    array(
        'anrede' => 'Ms.',
        'name' => 'Emily Brown',
        'city' => 'Toronto',
        'hobbies' => array('cooking', 'dancing', 'yoga')
    ),
    array(
        'anrede' => 'Mr.',
        'name' => 'David Lee',
        'city' => 'Tokyo',
        'hobbies' => array('playing basketball', 'watching movies')
    )
);

?>

<h1>People List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Hobbies</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daten as $person): ?>
                    <tr class="<?= $person['anrede'] == 'Mr.'?'bg-info' : 'bg-warning'?>">
                        <td><?php echo $person['anrede']; ?></td>
                        <td><?php echo $person['name']; ?></td>
                        <td><?php echo $person['city']; ?></td>
                        <td><?php echo implode(', ', $person['hobbies']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>