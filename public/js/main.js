var heroName;

function setHeroName(name){
    heroName = name;
    $('.id_hero_name').text(''+heroName);
}
function delHero(){
     document.location.href=("../public/delHero/"+heroName);
}
