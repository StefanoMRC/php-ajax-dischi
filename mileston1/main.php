<?php
$dischi= [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => '<img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" >',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => '<img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg" >',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => '<img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg" >',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => '<img class="img-fluid" src="https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg" >',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => '<img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg" >',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => '<img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg" >',
        'genre' => 'Rock'
    ]
];
?>


<div class="container mt-3 sfondo_container ">
    <div class="row row-cols-6">
        <?php
        foreach ($dischi as $value) {
           echo "<div class='text-center col mx-3 my-3 p-3'>".
           $value['poster'].
           "<h4 class='text-uppercase mt-3'>".$value['title']."</h4>".
           "<p>".$value['author']."</p>".
           "<span>".$value['year']."</span>
       </div>";
        }
        
        ?>
        <!-- <div class="text-center col mx-3 my-3 p-3">
            <img src="img" alt="" class="img-fluid">
            <h4 class="text-uppercase mt-3"></h4>
            <p></p>
            <span></span>
        </div> -->
    </div>

</div>
