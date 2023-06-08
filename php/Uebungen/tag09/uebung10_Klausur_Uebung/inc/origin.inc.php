<?php
heading("originbg.jpg", "Origin");
$cities = [ 
    [ 'titel' => 'Paris', 'einwohner' => '2 000 000', 'fläche' => '105 km²', 'info' => 'Mit einer vergleichsweise kleinen Stadtfläche von 105,40 Quadratkilometern ist Paris mit 20.371 Einwohnern pro Quadratkilometer die am dichtesten besiedelte Großstadt Europas.'],
    [ 'titel' => 'Berlin', 'einwohner' => '3 645 000', 'fläche' => '891 km²', 'info' => 'Berlin ist die Hauptstadt und zugleich ein eigenständiges Bundesland der Bundesrepublik Deutschland. Mit rund 3,6 Millionen Einwohnern ist Berlin die bevölkerungsreichste und flächengrößte Stadt Deutschlands.'],
    [ 'titel' => 'London', 'einwohner' => '8 982 000', 'fläche' => '1 572 km²', 'info' => 'London ist die Hauptstadt des Vereinigten Königreichs und des Landesteils England. Die Stadt liegt an der Themse in Südostengland auf der Insel Großbritannien. Mit etwa 9 Millionen Einwohnern ist London die größte Stadt der Europäischen Union.'],
    [ 'titel' => 'Madrid', 'einwohner' => '3 334 000', 'fläche' => '605 km²', 'info' => 'Madrid ist die Hauptstadt Spaniens und der Autonomen Gemeinschaft Madrid. Die Metropolregion Madrid zählt mit etwa sieben Millionen Einwohnern zu den größten Metropolen Europas.'], 
    [ 'titel' => 'Rome', 'einwohner' => '2 873 000', 'fläche' => '1 285 km²', 'info' => 'Rom ist die Hauptstadt Italiens und der Region Latium. Mit etwa 2,9 Millionen Einwohnern im Stadtgebiet sowie rund vier Millionen Einwohnern in der Agglomeration ist sie die größte Stadt Italiens.'], 
    [ 'titel' => 'Moscow', 'einwohner' => '12 678 000', 'fläche' => '2 511 km²', 'info' => 'Moskau ist die Hauptstadt und mit Abstand bevölkerungsreichste Stadt Russlands sowie die größte Stadt Europas. Sie liegt an der Moskwa, einem Nebenfluss der Oka, die in die Wolga mündet.'], 
    [ 'titel' => 'Tokyo', 'einwohner' => '13 960 000', 'fläche' => '2 194 km²', 'info' => 'Tokio ist eine Metropole in der Kantō-Region im Osten der japanischen Hauptinsel Honshū. Sie umfasst die 23 Bezirke auf dem Gebiet der ehemaligen Stadt Tokio und mehrere andere Städte, Dörfer und Inseln. Tokio ist die Hauptstadt Japans und die bevölkerungsreichste Stadt der Welt.'], 
    [ 'titel' => 'New York City', 'einwohner' => '8 336 000', 'fläche' => '783 km²', 'info' => 'New York City ist eine Weltstadt an der Ostküste der Vereinigten Staaten. Sie liegt im Bundesstaat New York und ist mit rund 8,3 Millionen Einwohnern die größte Stadt der USA. New York City besteht aus fünf Boroughs: Manhattan, Brooklyn, Queens, The Bronx und Staten Island.'], 
    [ 'titel' => 'Beijing', 'einwohner' => '21 542 000', 'fläche' => '16 411 km²', 'info' => 'Peking ist die Hauptstadt der Volksrepublik China und eine der bevölkerungsreichsten Städte der Welt. Sie liegt im Nordosten Chinas am Fluss Jangtse. Peking ist das politische, kulturelle und wissenschaftliche Zentrum Chinas.'], 
    [ 'titel' => 'Sydney', 'einwohner' => '5 312 000', 'fläche' => '12 368 km²', 'info' => 'Sydney ist die Hauptstadt des australischen Bundesstaates New South Wales und die größte Stadt in Australien und Ozeanien. Sie liegt an der Ostküste Australiens am Pazifischen Ozean. Sydney ist bekannt für das Sydney Opera House, die Harbour Bridge und den Bondi Beach.']
];
?>
<div class="container">
    <h2 class="color-1 text-center fw-bold my-5">Where do our flowers come from? </h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=origin" method="POST" class="border rounded-3 p-3">
                <div class="p-1">
                    <input type="text" name="search" class="form-control" placeholder="Stadtsuche...(beginnt mit ...)" />
                    <input type="submit" value="suche" name="btn" class="btn btn-danger fw-bold my-1" /> 
                </div>
            </form>
        </div>
    </div>

    

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <?php 
                if(isset($_POST['btn']) && !empty($_POST['search'])):
                    $filter = [];
                    foreach($cities AS $value) {
                        if(strtolower($value['titel'][0]) === strtolower($_POST['search'][0])) {
                            $filter[] = $value;
                        }
                    }
                    if(!empty($filter)):
                        foreach($filter AS $city):
                    ?>
                        <ul class="list-group my-2 list-group-item-light mt-3">
                            <li class="list-group-item"><h3 class="color-3 text-center fw-bold"><?= $city['titel']?></h3></li>
                            <li class="list-group-item"><b>Anzahl der Einwohner: </b><?= $city['einwohner']?></li>
                            <li class="list-group-item"><b>Fläche der Stadt: </b><?= $city['fläche']?></li>
                            <li class="list-group-item"><?= $city['info']?></li>
                        </ul>
                    <?php 
                        endforeach;
                    else:
                        echo '<div class="alert alert-secondary my-2 fw-bold fs-4">';
                        echo 'Leider nichts gefunden';
                        echo '</div>';
                    endif;
                endif; #end isset
                ?>
</div>

