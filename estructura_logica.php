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
            setTag($etiquetas,'div');
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,'div');
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'h1');
                    prtTag($etiquetas);
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
            setTag($etiquetas,getChar($char) . 'div');
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,'img');
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
                    setTag($etiquetas,'span');
                    prtTag($etiquetas);
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'span');
                    prtTag($etiquetas);
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,'span');
                    prtTag($etiquetas);
                    setTag($etiquetas,getChar($char) . 'span');
                    prtTag($etiquetas);
                ?>
                <br>
                <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text"; ?>
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