import axios from "axios"

export default {
    state:{
        messages:[],
        users:[]
    },
    mutations:{
    updateMessageList (state, data) {
      state.messages = data
    },
    addMessage(state,message){
        state.messages.push(message)
    }
    },
    actions:{
        storeMessage(context,params){
            return axios.post('chat/message', params)
            .then(response => {
                context.commit('addMessage', response.data)
              })
            .catch(() => console.log("error1 "))
        },
        listMessage(context){
            return axios.get('chat/messages')
           .then(response => {
                context.commit('updateMessageList', response.data)
            })
            .catch(() => console.log("error 2"))
        }
    },
    getters:{}
}