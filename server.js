// =============================================================================
// SOCKET SERVER
// =============================================================================
var PORT = 3001;
var server = require("http").Server();
var io = require("socket.io")(server);
io.on('connection', function(socket){
  console.log("a user connected");

    io.emit("connected");
});
server.listen(PORT);

console.log("socket server start at port: " + PORT);


// =============================================================================
// REDIS CLIENT
// =============================================================================
var Redis = require("ioredis");
var redis = new Redis();

redis.subscribe("test-channel");

redis.on("message", function (channel, message) {

    message = JSON.parse(message);


    console.log("redis.on.message -> channel: " + channel + ", message: " + message.event);
    io.emit(channel + ":" + message.event, message.data);

});

