<?php

    $active_page = $active_page ?? '';

?>
<header class="header box-shadow-soft" data-aos="fade-down">
    <div class="container">
        <a class="is-flex" href="index.html" title="LOCLO Homepage">
            <svg class="logo box-shadow-soft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 200" alt="LOCLO Brand Logo"><polygon points="85 121 85 67 69 67 69 134 106 134 106 121 85 121"/><path d="M175,65c-20.43,0-37,16.12-37,36s16.57,36,37,36,37-16.12,37-36S195.43,65,175,65Zm.5,55.89A20.95,20.95,0,1,1,196,100,20.73,20.73,0,0,1,175.5,120.89Z"/><polygon points="358 121 358 67 342 67 342 134 379 134 379 121 358 121"/><path d="M301,114.63a20.26,20.26,0,0,1-15.5,7.26,20.95,20.95,0,0,1,0-41.89A20.26,20.26,0,0,1,301,87.26V68.09A37.78,37.78,0,0,0,286,65c-20.43,0-37,16.12-37,36s16.57,36,37,36a37.78,37.78,0,0,0,15-3.09Z"/><path d="M448,65c-20.43,0-37,16.12-37,36s16.57,36,37,36,37-16.12,37-36S468.43,65,448,65Zm.5,55.89A20.95,20.95,0,1,1,469,100,20.73,20.73,0,0,1,448.5,120.89Z"/></svg>
        </a>
        <nav class="gn">
            <ul class="is-flex">
                <li class="<?php if($active_page == "shop-all") { echo "active"; } ?>"><a href="#" title="Shop All">Shop All</a></li>
                <li class="<?php if($active_page == "apparel") { echo "active"; } ?>"><a href="#" title="Apparel">Apparel</a></li>
                <li class="<?php if($active_page == "accessories") { echo "active"; } ?>"><a href="#" title="Accessories">Accessories</a></li>
                <li class="<?php if($active_page == "login") { echo "active"; } ?>">
                    <a href="#" title="User Login">
                        <svg class="icons box-shadow" xmlns="http://www.w3.org/2000/svg" alt="Account Icon"><path d="M11.1 35.25q3.15-2.2 6.25-3.375Q20.45 30.7 24 30.7q3.55 0 6.675 1.175t6.275 3.375q2.2-2.7 3.125-5.45Q41 27.05 41 24q0-7.25-4.875-12.125T24 7q-7.25 0-12.125 4.875T7 24q0 3.05.95 5.8t3.15 5.45ZM24 25.5q-2.9 0-4.875-1.975T17.15 18.65q0-2.9 1.975-4.875T24 11.8q2.9 0 4.875 1.975t1.975 4.875q0 2.9-1.975 4.875T24 25.5ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.775t4.3-6.35q2.725-2.725 6.375-4.3Q19.9 4 24 4q4.15 0 7.775 1.575t6.35 4.3q2.725 2.725 4.3 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.3 6.375-2.725 2.725-6.35 4.3Q28.15 44 24 44Zm0-3q2.75 0 5.375-.8t5.175-2.8q-2.55-1.8-5.2-2.75-2.65-.95-5.35-.95-2.7 0-5.35.95-2.65.95-5.2 2.75 2.55 2 5.175 2.8Q21.25 41 24 41Zm0-18.5q1.7 0 2.775-1.075t1.075-2.775q0-1.7-1.075-2.775T24 14.8q-1.7 0-2.775 1.075T20.15 18.65q0 1.7 1.075 2.775T24 22.5Zm0-3.85Zm0 18.7Z"/></svg>
                    </a>
                </li>
                <li class="<?php if($active_page == "bag") { echo "active"; } ?>">
                    <a href="#" title="Shopping Bag">
                        <svg class="icons box-shadow"  xmlns="http://www.w3.org/2000/svg" alt="Shopping Bag Icon"><path d="M11 44q-1.2 0-2.1-.9Q8 42.2 8 41V15q0-1.2.9-2.1.9-.9 2.1-.9h5.5v-.5q0-3.15 2.175-5.325Q20.85 4 24 4q3.15 0 5.325 2.175Q31.5 8.35 31.5 11.5v.5H37q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h26V15h-5.5v4.5q0 .65-.425 1.075Q30.65 21 30 21q-.65 0-1.075-.425-.425-.425-.425-1.075V15h-9v4.5q0 .65-.425 1.075Q18.65 21 18 21q-.65 0-1.075-.425-.425-.425-.425-1.075V15H11v26Zm8.5-29h9v-.5q0-1.9-1.3-3.2Q25.9 7 24 7q-1.9 0-3.2 1.3-1.3 1.3-1.3 3.2ZM11 41V15v26Z"/></svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>