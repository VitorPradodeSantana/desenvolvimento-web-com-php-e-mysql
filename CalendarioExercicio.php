<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>
    <?Php
        function linha($semana)
        {
            echo "<tr>";
            for($i = 0; $i <= 6; $i++){
                if(isset($semana[$i])){
                    echo "<td>{$semana[$i]}</td>";
                }else{
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }

        function calendario()
        {
            $dia = 1;
            $semana = array();
            while($dia <= 31){
                array_push($semana, $dia);

                if(count($semana) == 7){
                    linha($semana);
                    $semana = array();
                }

                $dia++;
            }
            linha($semana);
        }

        // Verificando o horário do dia para poder iniciar um diálogo

        echo(date("h:1"));

        echo "<br>";

        if(date("h:i") <= "12:00")
        {
            echo "Bom Dia";

        }else if(date("h:i") > "12:00" & date("h:i") <= "18:00")
        {
            echo "Boa Tarde";

        }else
        {
            echo "Boa Noite";
        }


        
    ?>
    <h1><?php echo "CALENDÁRIO";?></h1>
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
        </tr>
        <?php calendario(); ?>
    </table>
</body>
</html>