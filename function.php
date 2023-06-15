<?
function createLinks(){
    $links =[
        "about"=>"?page=1",
        "contacts"=>"?page=2",
        "project"=>"?page=3",
        "map"=>"?page=4",
        "home"=>"?page=0"
    ];
    echo "<div>";
    foreach($links as $key=>$link){
        echo "<div><a href=$link>$key</a></div>";
    }
}