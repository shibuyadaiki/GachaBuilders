var room = require('./room.js');

function gameServer(spec, my) {
    var app = spec.httpServer;
    var logLevel = spec.logLevel || 1;
    var io = require('socket.io').listen(app, {
        'log level' : logLevel
    });

    var mainRoom = room();


    var hideEquip = function(){
      io.sockets.in(0).emit('HideEquip');
    };
    setTimeout(hideEquip, 1000 * 60);

    var onBattle = function(){
      io.sockets.in(0).emit('OnBattle',mainRoom.doBattle());
    };
    setTimeout(onBattle, 1000 * 90);

    io.sockets.on('connection', function(socket) {
        socket.on('EnterRoom',function(data){
            var roomId = data.roomId;
            var name = data.name;
            var loginInfo = {
                roomId : roomId,
                name : name
            };
            socket.set('loginInfo',loginInfo,function(){
                mainRoom.join(name);
                socket.join(roomId);
                if(mainRoom.isStartGame()){
                    var ret = {
                        players : mainRoom.getPlayers()
                    };
                    io.sockets.in(roomId).emit('GameStart', ret);
                }
            });


        });

        socket.on('GachaMonster',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./monsterGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeMonster', eq);
            });
        });
        socket.on('GachaHead',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./helmGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeHelm', eq);
            });
        });
        socket.on('GachaBody',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./armorGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeArmor', eq);
            });
        });
        socket.on('GachaHood',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./bootsGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeBoots', eq);
            });
        });
        socket.on('GachaWeapon',function(){
            socket.get('loginInfo',function(err,data){

                $.ajax({
                  type: "POST",
                  url: "./weaponGacha.php",
                  cache: false,
                  data: "",
                  success: function(json){
                    var roomId = data.roomId;
                    var name = data.name;
                    var eq = {
                        name : name,
                        val : json
                    };
                    mainRoom.setHead(eq);
                    io.sockets.in(roomId).emit('ChangeWeapon', eq);
                  }
                });
            });
        });
        socket.on('GachaShield',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./shieldGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeShield', eq);
            });
        });
        socket.on('GachaAccessory',function(){
            socket.get('loginInfo',function(err,data){
                var json = require('./acceGacha.php');
                var roomId = data.roomId;
                var name = data.name;
                var eq = {
                    name : name,
                    val : json
                };
                mainRoom.setHead(eq);
                io.sockets.in(roomId).emit('ChangeAcce', eq);
            });
        });

        socket.on('Battle',function(){
            socket.get('loginInfo',function(err,data){
                var roomId = data.roomId;
                if(mainRoom.isStart()){

                    var collback = function(text){
                      io.sockets.in(roomId).emit('BattleLog', text);
                    };
                    var ret = mainRoom.doBattle(collback);
                    io.sockets.in(roomId).emit('Result', ret);
                }
            });
        });

        socket.on('disconnect',function(data){
            socket.get('loginInfo',function(err,data){
                var roomId = data.roomId;
                socket.leave(roomId);
                var clients = io.sockets.clients(roomId);
                if(clients.length === 0) {
                    mainRoom = room();
                } else {
                    for(var i in clients) {
                        clients[i].disconnect();
                    }
                }
            });
        });
    });

    return io;
};

module.exports = gameServer;
