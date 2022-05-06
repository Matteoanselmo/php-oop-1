<?php 
    class Movies {
        public $title;
        public $writer;
        public $genre;
        function __construct($title, $writer, $genre){
            $this->title = $title;
            $this->writer = $writer;
            $this->genre =$genre;
        }
        public function getTitle(){
            return $this->title;
        } 
        public function getWiter(){
            return $this->writer;
        } 
        public function getGenre(){
            return $this->genre;
        } 
    }

    $pirates = new Movies('Pirati dei Caraibi', 'Ted Elliot', 'Avventura');
    $fastAndFurios = new Movies('Fast and Furios', 'Gary Scott Thompson', 'Azione');
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-1</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Primo film: 
                <?php 
                    echo $pirates->title;
                ?>
                <h3>Scrittore
                    <?php 
                        echo $pirates->writer;
                    ?>
                </h3>
                <h3>Genere: 
                    <?php 
                        echo $pirates->genre;
                    ?>
                </h3>
            </h1>
        </div>
        <div>
            <h1>Secondo film: 
                <?php 
                    echo $fastAndFurios->title;
                ?>
                <h3>Scrittore
                    <?php 
                        echo $fastAndFurios->writer;
                    ?>
                </h3>
                <h3>Genere: 
                    <?php 
                        echo $fastAndFurios->genre;
                    ?>
                </h3>
            </h1>
        </div>
    </div>
</body>
</html>