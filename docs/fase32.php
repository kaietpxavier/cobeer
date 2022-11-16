<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M9-Disseny d'Interfícies Web</title>
    <meta charset="utf-8">
    <base target="_blank">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include 'components/header/header.html';
    ?>
    <?php
        include 'components/menu/menu.html';
    ?>
    <main>
        <div class="resources">
            <h1>Fase 3.1. Desenvolupament: CSS</h1>
            <ul>
                <?php
                $STAGE = 32;
                $TOPICS = 6;
                $TOPIC_LIST = [
                    "CSS Reset",
                    "CSS Básico",
                    "CSS Grid",
                    "CSS Flex",
                    "CSS Snippets",
                    "CSS Animation"
                ];

                function convert($str)
                {
                    return iconv("Windows-1252", "UTF-8", $str);
                }

                $topic = 0;
                for ($c = 0; $c < $TOPICS; $c++) {
                    $row = 1;
                    $heading_set = 0;
                    if (($handle = fopen("resources/resources.csv", "r")) !== FALSE) {
                        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                            if ($row != 1 and $data[0] == $STAGE and $data[1] == $TOPIC_LIST[$topic]) {
                                if ($heading_set == 0) {
                                    echo "<h3 class='themeHeading'>" . $data[1] . "</h3>";
                                    echo '<li class="theme">';
                                    $heading_set = 1;
                                }
                                $num = count($data);
                                // $data = array_map( "convert", $data);
                                $title = $data[3];
                                $link = $data[2];
                                $href = $data[4];
                                include 'components/resource/resource.php';
                            }
                            $row++;
                        }
                        fclose($handle);
                        echo '</li>';
                    }
                    $topic++;
                }
                ?>
            </ul>
        </div>
    </main>
    <?php
    include 'components/footer/footer.html';
    ?>
</body>

</html>