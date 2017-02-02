var room = require('./room.js');

function gameServer(spec, my) {
    var ajax = require('ajax-lib');
    var app = spec.httpServer;
    var logLevel = spec.logLevel || 1;
    var io = require('socket.io').listen(app, {
        'log level' : logLevel
    });

    var timeOutID60;
    var timeOutID90;

    var HasNull = function (socket) {
        if (typeof socket.loginInfo === "undefined") return true;
        return false;
    }

    var mainRoom = room();

    var hideEquip = function (roomId) {
        io.sockets.in(roomId).emit('HideEquip');
    };

    var onBattle = function (roomId) {
        mainRoom.doBattle(function (text) {
            io.sockets.in(roomId).emit('BattleLog', text);
            console.log(text);
        },function (text) {
            io.sockets.in(roomId).emit('OnBattle', text);
            console.log(text);
        });
    };

    var addEffectText = function (eq) {
      var ef = eq.effect;
        if(ef === 0){
          eq.EFFECT_TEXT = '無し';
        }
        else if(ef === 1){
          eq.EFFECT_TEXT = '防御貫通+25%';
        }
        else if(ef === 2){
          eq.EFFECT_TEXT = '反射+10%';
        }
        else if(ef === 3){
          eq.EFFECT_TEXT = '自動回復+5';
        }
    };

    var preurl = 'http://localhost:5900/GachaBuildersHost/';
    var PlayGacha = function (socket, php, send, setfunc) {
        if (HasNull(socket)) return;
        if(mainRoom.isGameEnd())return;
        ajax.get(preurl + php, function (err, json) {
            if (err !== null) {
                console.log(err);
                return;
            }
            if (typeof json.body === "undefined") {
                console.log('json.body = undefined');
                return;
            }
            var roomId = socket.loginInfo.roomId;
            var name = socket.loginInfo.name;
            var eq = {
                name: name,
                val: JSON.parse(json.body)
            };
            addEffectText(eq);
            setfunc(eq);
            io.sockets.in(roomId).emit(send, eq);
        });
    };

    //mainRoom.join('t');
    //ajax.get('http://localhost:5900/GachaBuildersHost/acceGacha.php', function (err, json) {
    //
    //    var roomId = 0;
    //    var name = 't';
    //    var eq = {
    //        name: name,
    //        val: json.body
    //    };
    //    mainRoom.setWeapon(eq);
    //    io.sockets.in(roomId).emit('ChangeWeapon', eq);
    //    console.log('ChangeWeapon');
    //});

    io.sockets.on('connection', function (socket) {

        socket.on('EnterRoom', function (data) {
            if (mainRoom.isStartGame()) {
                console.log('enterroom over');
                return;
            }
            if (mainRoom.isGameEnd()) {
                console.log('gameend');
                return;
            }
            var roomId = data.roomId;
            var name = data.name;

            if (HasNull(socket)) {
                console.log('enter room');
                console.log(name);
                socket.loginInfo = {
                    roomId: roomId,
                    name: name
                };
                mainRoom.join(name);
                socket.join(roomId);


                //PlayGacha(socket, 'monsterGacha.php', 'ChangeMonster', function (eq) { mainRoom.setMonster(eq); });
                //PlayGacha(socket, 'helmGacha.php', 'ChangeHelm', function (eq) { mainRoom.setHelm(eq); });
                //PlayGacha(socket, 'armorGacha.php', 'ChangeArmor', function (eq) { mainRoom.setArmor(eq); });
                //PlayGacha(socket, 'bootsGacha.php', 'ChangeBoots', function (eq) { mainRoom.setBoots(eq); });
                //PlayGacha(socket, 'weaponGacha.php', 'ChangeWeapon', function (eq) { mainRoom.setWeapon(eq); });
                //PlayGacha(socket, 'shieldGacha.php', 'ChangeShield', function (eq) { mainRoom.setShield(eq); });
                //PlayGacha(socket, 'acceGacha.php', 'ChangeAcce', function (eq) { mainRoom.setAccessory(eq); });

            } else {
                console.log('rename faild');
                return;
            }
            if (mainRoom.isStartGame()) {
                var ret = {
                    players: mainRoom.getPlayers()
                };
                io.sockets.in(roomId).emit('GameStart', ret);

                timeOutID60 = setTimeout(hideEquip, 1000 * 60, roomId);
                timeOutID90 = setTimeout(onBattle, 1000 * 90, roomId);
            }

        });

        socket.on('GachaMonster', function () {
            PlayGacha(socket, 'monsterGacha.php', 'ChangeMonster', function (eq) { mainRoom.setMonster(eq); });
        });
        socket.on('GachaHelm', function () {
            PlayGacha(socket, 'helmGacha.php', 'ChangeHelm', function (eq) { mainRoom.setHelm(eq); });
        });
        socket.on('GachaArmor', function () {
            PlayGacha(socket, 'armorGacha.php', 'ChangeArmor', function (eq) { mainRoom.setArmor(eq); });
        });
        socket.on('GachaBoots',function(){
            PlayGacha(socket, 'bootsGacha.php', 'ChangeBoots', function (eq) { mainRoom.setBoots(eq); });
        });
        socket.on('GachaWeapon',function(){
            PlayGacha(socket, 'weaponGacha.php', 'ChangeWeapon', function (eq) { mainRoom.setWeapon(eq); });
        });
        socket.on('GachaShield',function(){
            PlayGacha(socket, 'shieldGacha.php', 'ChangeShield', function (eq) { mainRoom.setShield(eq); });
        });
        socket.on('GachaAcce', function () {
            PlayGacha(socket, 'acceGacha.php', 'ChangeAcce', function (eq) { mainRoom.setAccessory(eq); });
        });

        socket.on('Battle',function(){
            if(mainRoom.isStart()){
                onBattle(socket);
            }
        });

        socket.on('disconnect', function (data) {
            if (HasNull(socket)) return;
            var roomId = socket.loginInfo.roomId;
            var winlog = socket.loginInfo.name +'が退出しました';
            //socket.leave(roomId);
            //var clients = io.sockets.clients(roomId);
            //console.log(clients);
            mainRoom.leave(socket.loginInfo.name);

            clearTimeout(timeOutID60);
            clearTimeout(timeOutID90);
            io.sockets.in(roomId).emit('OnBattle', winlog);
            if (mainRoom.GetPlayerNum() === 0) {
                    mainRoom = room();
                    console.log('room reset');
                } else {
                    //clients.disconnect();
                    //for (var i in clients) {
                    //    console.log(i);
                    //   clients.disconnect();
                    //}
                }
        });
    });

    return io;
};

module.exports = gameServer;
