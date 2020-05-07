<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Brainfuck Challenge</title>
</head>
<body>
    <?php
        require_once 'includes.php';

        $bfOutput = runBrainFuck($brainfuck_program, $brainfuck_memory);
        foreach($bfOutput as $result) {
            echo $result, '<br>';
        }
    ?>
</body>
</html>
