function equipdata() {
    var that = {};
    that.name = '装備なし';
    that.hp = 0;
    that.rare = 0;
    that.atk = 0;
    that.def = 0;
    that.spd = 0;
    that.luck = 0;
    that.effect = 0;
    that.img = '';
    that.that = {};
    that.php_json_encode = function (json) {
        that.name = json['name'];
        that.rare = json['RARE'];
        that.hp = json['HP'];
        that.atk = json['ATK'];
        that.def = json['DEF'];
        that.spd = json['SPD'];
        that.luck = json['LUK'];
        that.effect = json['EFFECT'];
        that.img = json['img'];
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
    return that;
};

module.exports = equipdata;
