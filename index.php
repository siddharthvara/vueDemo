<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script src="vue.js"></script>
  <link rel="stylesheet" href="styles.css">
  <body>
     
    <div id="app">
      
        <input v-model="message" v-show="setname" placeholder="Enter player">
        <button id="player" v-on:click="player()" v-show="setname">OK</button>
        <p>Player Name is:<p style="text-decoration: rebeccapurple;">{{ message }}<p></p>
        

      <div id="bag" v-bind:class="{burst : ended }" v-show="!setname"></div>

      
      <div id="bag-health" v-show="!setname">
        <div v-bind:style="{ width: health + '%' }"></div>
      </div>
      <div id="health" v-show="!setname">
        {{health}}%
      </div>
      
      <div id="controls" v-show="!setname">
        <button id="punch" v-on:click="punch()" v-show="!ended">Punch The Bag</button>
        <button id="restart" v-on:click="restart()">Restart The Game</button>
      </div>
      
      <div id="message" v-show="ended"><h1>Destroy..!!</h1></div>

    </div>
  </body>
  <script src="app.js"></script>
</html>
