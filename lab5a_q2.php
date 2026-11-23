<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q2</title>
    </head>
    <?php
    $student = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'AGE' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'AGE' => 22
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'AGE' => 23
    ]
];
?>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>AGE</th>
            </tr>
            <?php foreach ($student as $s) : ?>
                <tr>
                    <td><?php echo $s['name']; ?></td>
                    <td><?php echo $s['program']; ?></td>
                    <td><?php echo $s['AGE']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>