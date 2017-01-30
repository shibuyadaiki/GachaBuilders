var data = {
  name:'装備なし',
  hp:0,
  rare:0,
  atk:0,
  def:0,
  luck:0,
  effect:0,
  img:'',
  php_json_encode :function(json){
  this.name=json['name'];
  this.rare=json['RARE'];
  this.hp=json['HP'];
  this.atk=json['ATK'];
  this.def=json['DEF'];
  this.luck=json['LUK'];
  this.effect=json['EFFECT'];
  this.img=json['img'];
    //JOSN.parse(json,function(key,value){
    //this.name=data['name'];
    //this.rare=data['RARE'];
    //this.hp=data['HP'];
    //this.atk=data['ATK'];
    //this.def=data['DEF'];
    //this.luck=data['LUK'];
    //this.effect=data['EFFECT'];
    //this.img=data['img'];
    //}
  }
};

module.exports = data;
