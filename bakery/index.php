<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <div id="header">
        <?php include("components/navbar.php") ?>
        <div id="header_wrapper">
            <h1>Pastry with love</h1>
            <img src="images/dashed line.png" id="dashed_line" alt="line">
            <h2>We're bringing you fresh ingredients every day in ways you can't resist.</h2>
            <a href="#" id="main_btn">Our Menu</a>
        </div>
        <img src="images/border_pain.png" id="img_border" alt="">
    </div>
    <div id="main">
        <div id="main_content">
            <div id="citation">
                <h2 id="artcake">Art of cake</h2>
                <h5 id="memories">We create delicious memories</h5>

                <p id="lorem1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus fugit ad placeat
                    laudantium soluta aut nulla odit vero et. Quibusdam tempora nesciunt necessitatibus numquam,
                    obcaecati cupiditate iusto error optio minima incidunt, dolorem magnam ullam labore,
                    doloribus voluptates praesentium fugiat reiciendis.
                </p>

                <h5 id="chef">Chef Cook</h5>

                <div id="personne">
                    <span class="nom">Benito</span>
                    <img src="images/personne.png" id="photo" alt="">
                    <span class="nom">Gaspare</span>
                </div>
                <p id="citation_text">Unique creations for unique occasions</p>
            </div>
            <div id="main_img">
                <img src="images/taste.png" id="img_taste" alt="">
                <div id="quatuor_img">
                    <img src="images/farine.png" alt="">
                    <img src="images/oeuf.png" alt="">
                    <img src="images/gateau1.png" alt="">
                    <img src="images/fraise.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="pancake">
        <div id="info_pancake">
            <div id="delay">
                <h3 id="ready">Ready in</h3>
                <p id="fourty">40</p>
                <p id="mins">mins</p>
            </div>
            <div id="img_pancake">

            </div>
            <div id="menucentre">
                <img src="images/menu.png" alt="">
            </div>
            <div id="text-pancake">
                <h2>Tasty Pancakes</h2>
                <h4>Season Favorites</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quis aliquam ea adipisci odit nisi obcaecati odio tempora
                    ab est repellat impedit voluptate optio, fugit reprehenderit
                    sunt. Nemo aperiam fuga nostrum?</p>
                <div id="carousel">
                    <img src="images/left.png" class="arrow" alt="">
                    <img src="images/img6.png" class="pancake_carousel" alt="">
                    <img src="images/img7.png" class="pancake_carousel" alt="">
                    <img src="images/img8.png" class="pancake_carousel" alt="">
                    <img src="images/right.png" class="arrow" alt="">
                </div>
                <img src="images/windmill.png" id="windmill" alt="">
            </div>
        </div>
    </div>
    <div id="breakfast">
        <div id="breakfast_txt">
            <h2>Breakfast</h2>
            <h4>7AM breakfast ? We're open!</h4>

            <div id="breakfast_responsive">
                <div id="breakfast_first">
                    <h3>Full Breakfast</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="price">$12.49</p>
                    <img src="images/couronne.png" alt=""><img src="images/couronne2.png" alt="">    
                </div>
    
    
                <div>
                    <h3>Toast & Jam</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="price">$4.90</p>
                    <img src="images/couronne.png" alt=""><img src="images/couronne2.png" alt="">
                </div>
    
    
                <div>
                    <h3>Muffins</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="price">$3.95</p>
                </div>
            </div>
        
        </div>
        <div id="breakfast_img">
            <div id="folder">
                <div id="esti">
                    <div id="est">
                        <h5>EST.</h5>
                    </div>
                    <div id="date">
                        <h5>1893</h5>
                    </div>
                </div>
                <img src="images/border_breakfast.png" alt="">
                <h2 id="morning">Your morning</h2>
                <h2>Escape with flair</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptates tempora aperiam fuga molestiae minus.</p>
                <div id="btn_read">
                    <a href="#">Read</a>
                </div>
                
            </div>
            
        </div>
        <img src="images/epis.png" id="epis" alt="">
    </div>
    <div id="jibarito">
        <div id="jibarito_title">
            <h2>The Jibarito Sandwich</h2>
            <h4>The best sandwich you've ever tasted !</h4>
        </div>
        <div id="main_jibarito">
            <div id="ingredient_jibarito">
                <div class="jibarito_list">
                    <img src="images/aptent.png" alt="">
                    <h5>Class Aptent</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, facilis.</p>
                </div>
                <div class="jibarito_list">
                    <img src="images/eget.png" alt="">
                    <h5>Nulla Eget</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, facilis.</p>
                </div>
                <div class="jibarito_list">
                    <img src="images/sed.png" alt="">
                    <h5>Sed Nibh Purus</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, facilis.</p>
                </div>
            </div>
            <div id="menu_jibarito">
                <img src="images/jibarito_bg.png" alt="">
                <div id="full_recipe">
                    <a href="#" id="link_recipe">Full recipe</a>
                </div>
                <div id="list_carres">
                    <div class="carre carre1">
                        <h5>Prep</h5>
                        <p class="carre_time">15</p>
                        <p class="carre_min">mins</p>
                    </div>
                    <div class="carre carre2">
                        <h5>Cook</h5>
                        <p class="carre_time">35</p>
                        <p class="carre_min">mins</p>
                    </div>
                    <div class="carre carre3">
                        <h5>Ready in</h5>
                        <p class="ready">50</p>
                        <p class="ready_min">mins</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="footer_menu">
            <li>Our menu</li>
            <li class="remove">~</li>
            <li>Gallery</li>
            <li class="remove">~</li>
            <li>Culture</li>
            <li class="remove" id="logo_footer">Gustoso</li>
            <li>Events</li>
            <li class="remove">~</li>
            <li>Gatering</li>
            <li class="remove">~</li>
            <li>Visit Us</li>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>