new Vue({
  el: '#app',

  data: {
    health : 100,
    ended : false,
    message:'',
    setname : true
  },

  methods: {

    punch: function(){
      this.health -= 10;
      if(this.health <= 0 ){
        this.ended = true;
      }

      console.log(this.health);
    },

    restart: function() {
      this.health = 100;
      this.ended = false;
      this.setname = true;
      console.log(this.health);
    },

    player: function(){
      //alert(this.setname);
      this.setname = false;
    }
  },



  computed: {

  }
});
