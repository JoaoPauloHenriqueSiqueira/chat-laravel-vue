<template>
  <div class="messages">
        <grid-loader :loading="loading" :color="'#157347'"  ></grid-loader>
        <message 
          v-for="message in messages" :key="message.id" :message="message">
        </message>
  </div>
</template>

<script>
import GridLoader from 'vue-spinner/src/GridLoader'

export default({
  data(){
    return {
      loading: true
    } 
  },
  methods:{
    loadMessages(){
      this.$store.dispatch('listMessage').finally(() => this.loading = false)
    }
  },
  computed: {
    messages () {
     // return this.$store.state.chat.messages;
      return this.$store.getters.messages;
    }
  },
  created () {
    this.loadMessages();
  },
    components: {
        GridLoader
    }
})
</script>
<style scoped>
.messages{
  height: 400px;
  max-height: 400px;
  overflow-x: hidden;
  overflow-y:auto;
  
}
</style>