<?php

    $active_page = $active_page ?? '';

?>
<header class="header box-shadow-soft" data-aos="fade-down">
    <div class="container">
        <a class="is-flex" href="../index.php" title="LOCLO Homepage">
            <svg class="logo box-shadow-soft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 200" alt="LOCLO Brand Logo"><polygon points="85 121 85 67 69 67 69 134 106 134 106 121 85 121"/><path d="M175,65c-20.43,0-37,16.12-37,36s16.57,36,37,36,37-16.12,37-36S195.43,65,175,65Zm.5,55.89A20.95,20.95,0,1,1,196,100,20.73,20.73,0,0,1,175.5,120.89Z"/><polygon points="358 121 358 67 342 67 342 134 379 134 379 121 358 121"/><path d="M301,114.63a20.26,20.26,0,0,1-15.5,7.26,20.95,20.95,0,0,1,0-41.89A20.26,20.26,0,0,1,301,87.26V68.09A37.78,37.78,0,0,0,286,65c-20.43,0-37,16.12-37,36s16.57,36,37,36a37.78,37.78,0,0,0,15-3.09Z"/><path d="M448,65c-20.43,0-37,16.12-37,36s16.57,36,37,36,37-16.12,37-36S468.43,65,448,65Zm.5,55.89A20.95,20.95,0,1,1,469,100,20.73,20.73,0,0,1,448.5,120.89Z"/></svg>
        </a>
        <nav class="gn">
            <ul class="is-flex">
                <li class="<?php if($active_page == "shop-all") { echo "active"; } ?>"><a href="shopall.php" title="Shop All">Shop All</a></li>
                <li class="<?php if($active_page == "apparel") { echo "active"; } ?>"><a href="#" title="Apparel">Apparel</a></li>
                <li class="<?php if($active_page == "accessories") { echo "active"; } ?>"><a href="#" title="Accessories">Accessories</a></li>
                <li class="<?php if($active_page == "login") { echo "active"; } ?>">
                    <a href="#" title="Account">
                        <span class="material-symbols-outlined">account_circle</span>
                    </a>
                </li>
                <li class="<?php if($active_page == "bag") { echo "active"; } ?>">
                    <a href="#" title="Shopping Bag">
                        <span class="material-symbols-outlined">shopping_bag</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>