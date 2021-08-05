<?php
#Recursos
require_once __DIR__ . '/vendor/autoload.php';
use Rmo\Etiqueta;
//use Rmo\Atributos;
use Rmo\Magic;
#Objetos/Instancias
$etiquetas = new Etiqueta;
//$atributos = new Atributos;
$char = new Magic;
#seudo-estructura-html
    setTag($etiquetas,'section');
    prtTag($etiquetas);
?>
<br>

    <?php 
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,'div');
        prtTag($etiquetas);
    ?>
    <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,'div padding (int)(px-recomendado para paddings||rem||em||%)');
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,'div padding (int)(px-recomendado para paddings||rem||em||%)');
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'h1');
                    prtTag($etiquetas);
                    echo "&nbsp;Big data&nbsp;";
                    setTag($etiquetas,getChar($char) . 'h1');
                    prtTag($etiquetas);
                ?>
            <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($char) . 'div');
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($char) . 'div');
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,'div');
            prtTag($etiquetas);
            echo "&nbsp;blank space , just for la maquetacion foo XD&nbsp;";
            setTag($etiquetas,getChar($char) . 'div');
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,'img' . getChar($char));
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($char) . 'div');
        prtTag($etiquetas);
    ?>
    <br>
    <?php 
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,'div');
        prtTag($etiquetas);
    ?>
    <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,'div');
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,'p');
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'span color blue');
                    prtTag($etiquetas);
                    echo "&nbsp;Gran volumen&nbsp;";
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                    echo "&nbsp;de informacion.&nbsp;";
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Las empresas&nbsp;"; 
                    setTag($etiquetas,'span color blue');
                    prtTag($etiquetas);
                    echo "&nbsp;almacenan&nbsp;";
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                    echo "&nbsp;datos diariamente.&nbsp;";
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'span color blue');
                    prtTag($etiquetas);
                    echo "&nbsp;costos,eficiencia,entender&nbsp;";
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                    echo "&nbsp;a los clientes.&nbsp;";
                ?>
                <br>
                <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Solucion matematica a un problema de negocio."; ?>
            <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($char) . 'p');
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($char) . 'div');
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($char) . 'div');
        prtTag($etiquetas);
    ?>

<br>
<?php
    setTag($etiquetas,getChar($char) . 'section');
    prtTag($etiquetas);
?>