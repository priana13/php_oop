<?php 

/**
 * Page
 *  -> header
 *  -> body
 *  -> footer
 * 
 *  AdminPage extends Page
 *     - leftSideBar
 *     - content
 *     - topbar
 * 
 *  FrontPage extends Page
 *      - NavBar
 *      - content
 *      
 *   SinglePage extends FrontPage
 *      - rightSideBar  
 * 
 */

 class Page {

    public $header;
    public $body;
    public $footer;

 }


class AdminPage extends Page {

    public $side_bar = "Basic Side Bar";



}



$product_age = new AdminPage();
$product_age->header = "<h1> Header Blog </h1>";

echo $product_age->header;

echo $product_age->side_bar;