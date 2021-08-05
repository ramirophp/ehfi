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
$_char = new Magic;
$_char_ = new Magic;
#seudo-estructura-html
    setChar($_char,'<');
    setChar($_char_,'>');
    setTag($etiquetas,getChar($_char) . 'section' . getChar($_char_));
    prtTag($etiquetas);
?>
<br>

    <?php 
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,getChar($_char) . 'h1' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;Big data&nbsp;";
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'h1' . getChar($_char_));
                    prtTag($etiquetas);
                ?>
            <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
            echo "&nbsp;blank space , just for la maquetacion foo XD&nbsp;";
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . 'img' . getChar($char) . getChar($_char_));
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
    <?php 
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($_char) . 'p' . getChar($_char_));
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;Gran volumen&nbsp;";
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;de informacion.&nbsp;";
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Las empresas&nbsp;"; 
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;almacenan&nbsp;";
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;datos diariamente.&nbsp;";
                ?>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;costos,eficiencia,entender&nbsp;";
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo "&nbsp;a los clientes.&nbsp;";
                ?>
                <br>
                <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Solucion matematica a un problema de negocio."; ?>
            <br>
            <?php
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                setTag($etiquetas,getChar($_char) . getChar($char) . 'p' . getChar($_char_));
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>

<br>
<?php
    setTag($etiquetas,getChar($_char) . getChar($char) . 'section' . getChar($_char_));
    prtTag($etiquetas);
?>