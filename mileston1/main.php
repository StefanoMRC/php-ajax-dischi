


<div class="container  sfondo_container">
    <div class="row row-cols-4 justify-content-between">
        <?php
        foreach ($dischi as $value) {
           echo "<div class='text-center col mx-3 my-3 p-3 carta'>".
           $value['poster'].
           "<h4 class='text-uppercase mt-3'>".$value['title']."</h4>".
           "<p>".$value['author']."</p>".
           "<span>".$value['year']."</span>
       </div>";
        }
        
        ?>

    </div>

</div>
