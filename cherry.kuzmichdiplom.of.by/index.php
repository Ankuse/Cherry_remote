<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords_inner", "Главная");
$APPLICATION->SetPageProperty("title", "Главная");
$APPLICATION->SetTitle("Главная");
?>
<div class="infoblock container">
    <div class="col">
        <div class="form marg">
            <div class="inside_contacts marg">
                <div class="block_name"><p>Contact Us</p></div>
                <div class="inside_contacts_elem">
                    <input type="text" placeholder="Your Name">
                    <input type="text" placeholder="Daytime Number">
                    <input type="text" placeholder="Email Address">
                    <input type="text" placeholder="City">
                    <select class="select">
                        <option value="Problem With">Problem With</option>
                        <option value="Problem With2">Problem With2</option>
                        <option value="Problem With3">Problem With3</option>
                    </select>
                    <select class="select">
                        <option value="Problem With">Brand</option>
                        <option value="Problem With2">Brand2</option>
                        <option value="Problem With3">Brand3</option>
                    </select>
                    <input type="submit" class="button_red marg_wt" value="Lorem ipsum dolor">
                </div>
            </div>
        </div>
        <div class="news-list marg">
            <div class="block_name"><p>Headline</p></div>
            <p class="news_info">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut
                aliquip ex ea commodo </p>
            <a href="#">More about</a>
        </div>
    </div>

    <div class="col">
        <div class="col_inside marg_tlrb">
            <div class="section_info">
                <p class="name_sect">What We Do…</p>
                <div class="section_info_description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in <a href="#" >reprehenderit in
                            voluptate velit esse</a> cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="section_info_visual">
                    <div class="elem_c">
                        <div class="block_name"><p>Admin panel</p></div>
                        <div class="block_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/adminpanel.png" alt="adminpanel"></div>
                    </div>
                    <div class="elem_c">
                        <div class="block_name"><p>Shortcodes</p></div>
                        <div class="block_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/Shortcodes.png" alt="Shortcodes"></div>
                    </div>
                    <div class="elem_c">
                        <div class="block_name"><p>Videos</p></div>
                        <div class="block_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/Videos.png" alt="Videos"></div>
                    </div>
                </div>
            </div>

            <div class="section_info marg_wlr">
                <p class="name_sect">Lists</p>
                <div class="inside_elem">
                    <div class="elem_r">
                        <p class="name_ul">List style type circle <span>&lt;ul&gt;</span></p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                        </ul>
                    </div>
                    <div class="elem_r">
                        <p class="name_ul">Unstyled <span>&lt;ul classs=”unstyled”&gt;</span></p>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Consectetur adipiscing elit</p>
                        <p>Facilisis in pretium nisl aliquet</p>
                        <p>Nulla volutpat aliquam velit</p>
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor</li>
                        </ul>
                        <p>Faucibus porta lacus fringilla vel</p>
                        <p>Aenean sit amet erat nunc</p>
                    </div>
                    <div class="elem_r">
                        <p class="name_ul">Ordered <span>&lt;ol&gt;</span></p>
                        <ul class="decimal">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section_info marg_wlr">
                <p class="name_sect">Table</p>
                <div class="table">
                    <div class="row">
                        <div class="col"><p>№</p></div>
                        <div class="col"><p>Toranton rate</p></div>
                        <div class="col"><p>Puranocak var berond</p></div>
                        <div class="col"><p>Intime modular to cavan</p></div>
                        <div class="col"><p>Language</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>2</p></div>
                        <div class="col"><p>Modul caram</p></div>
                        <div class="col"><p>Remation vore undocost</p></div>
                        <div class="col"><p>Remation vore undocost</p></div>
                        <div class="col"><p>Modul caram</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>3</p></div>
                        <div class="col"><p>Victorian mor</p></div>
                        <div class="col"><p>Untable via costario more</p></div>
                        <div class="col"><p>Untable via costario more</p></div>
                        <div class="col"><p>Victorian mor</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>4</p></div>
                        <div class="col"><p>Jacon van dor</p></div>
                        <div class="col"><p>Executive live anothre vy</p></div>
                        <div class="col"><p>Executive live anothre</p></div>
                        <div class="col"><p>Jacon van dor</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>5</p></div>
                        <div class="col"><p>Inpuction mian</p></div>
                        <div class="col"><p>Nastiro macon puratece</p></div>
                        <div class="col"><p>Nastiro macon puratece</p></div>
                        <div class="col"><p>Inpuction mian</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>6</p></div>
                        <div class="col"><p>Povatior naron</p></div>
                        <div class="col"><p>Gover nate foracent pore</p></div>
                        <div class="col"><p>Gover nate foracent</p></div>
                        <div class="col"><p>Povatior naron</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p>7</p></div>
                        <div class="col"><p>Inbug for cars</p></div>
                        <div class="col"><p>Overview cal the montre</p></div>
                        <div class="col"><p>Overview cal the montre</p></div>
                        <div class="col"><p>Inbug for cars</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>