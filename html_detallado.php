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
#utileria-espacios
use Rmo\Espacios;
$espacios = new Espacios;
$_espacios = new Espacios;
#seudo-estructura-html
    setChar($_char,'<');
    setChar($_char_,'>');
    setTag($etiquetas,getChar($_char) . 'section' . getChar($_char_));
    prtTag($etiquetas);
?>
<br>

    <?php  
        echo getSpaces($espacios);
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
        <?php 
            echo mltSpaces($espacios,2);
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo mltSpaces($espacios,3); 
                setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo mltSpaces($espacios,4);  
                    setTag($etiquetas,getChar($_char) . 'h1' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"Big data");
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'h1' . getChar($_char_));
                    prtTag($etiquetas);
                ?>
            <br>
            <?php
                echo mltSpaces($espacios,3); 
                setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo mltSpaces($espacios,2); 
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo mltSpaces($espacios,2); 
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
            echo txtBtwSps($_espacios,"blank space , just for la maquetacion foo XD");
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
        <?php
            echo mltSpaces($espacios,2); 
            setTag($etiquetas,getChar($_char) . 'img' . getChar($char) . getChar($_char_));
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo getSpaces($espacios);
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
    <?php 
        echo getSpaces($espacios); 
        setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>
    <br>
        <?php
            echo mltSpaces($espacios,2);
            setTag($etiquetas,getChar($_char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
        <br>
            <?php
                echo mltSpaces($espacios,3); 
                setTag($etiquetas,getChar($_char) . 'p' . getChar($_char_));
                prtTag($etiquetas);
            ?>
            <br>
                <?php
                    echo mltSpaces($espacios,4);  
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"Gran volumen");
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"de informacion.");
                ?>
                <br>
                <?php
                    echo mltSpaces($espacios,4); 
                    echo "Las empresas&nbsp;"; 
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"almacenan");
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"datos diariamente.");
                ?>
                <br>
                <?php
                    echo mltSpaces($espacios,4); 
                    setTag($etiquetas,getChar($_char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"costos,eficiencia,entender");
                    setTag($etiquetas,getChar($_char) . getChar($char) . 'span' . getChar($_char_));
                    prtTag($etiquetas);
                    echo txtBtwSps($_espacios,"a los clientes.");
                ?>
                <br>
                <?php echo mltSpaces($espacios,4);echo "Solucion matematica a un problema de negocio."; ?>
            <br>
            <?php
                echo mltSpaces($espacios,3);
                setTag($etiquetas,getChar($_char) . getChar($char) . 'p' . getChar($_char_));
                prtTag($etiquetas);
            ?>
        <br>
        <?php
            echo mltSpaces($espacios,2); 
            setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
            prtTag($etiquetas);
        ?>
    <br>
    <?php
        echo mltSpaces($espacios,1); 
        setTag($etiquetas,getChar($_char) . getChar($char) . 'div' . getChar($_char_));
        prtTag($etiquetas);
    ?>

<br>
<?php
    setTag($etiquetas,getChar($_char) . getChar($char) . 'section' . getChar($_char_));
    prtTag($etiquetas);
?>