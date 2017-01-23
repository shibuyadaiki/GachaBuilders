var name;
var hp;
var rare;
var atk;
var def;
var luck;
var effect;
var img;
function php_json_encode(json){
  var data=JOSN.parse(json,function(key,value){
    name=data['name'];
    rare=data['RARE'];
    hp=data['HP'];
    atk=data['ATK'];
    def=data['DEF'];
    luck=data['LUK'];
    effect=data['EFFECT'];
    img=data['img'];
  }
}
