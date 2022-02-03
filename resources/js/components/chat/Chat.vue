<template>
    <div>
        <messages></messages>
        <textarea @keydown="keydownMessage" v-model="body" placeholder="Sua mensagem"></textarea>
        <button :disabled="loading" class="btn btn-success" @click.prevent="sendMessage">
            <pulse-loader :loading="loading" :color="'#FFF'" :size="'8px'" class="float-left"></pulse-loader>
            Enviar
        </button>
    </div>
</template>

<script>
import PulseLoader from 'vue-spinner/src/PulseLoader'

export default ({
    data() {
        return {
            body: "",
            loading: false
        }
    },
    methods: {
        keydownMessage(e) {
            if (e.keyCode === 13 && !e.shiftKey) {
                e.preventDefault();
                this.sendMessage();
            }

        },
        sendMessage() {
            if (!this.body || this.body.trim() == '' || this.loading) {
                return;
            }

            this.loading = true;
            this.$store.dispatch("storeMessage", { body: this.body }).then(() => this.body = '').finally(() => this.loading = false)
        }
    },
    components: {
        PulseLoader
    }
})
</script>

<style scoped>
.float-left {
    float: left;
}

textarea {
    width: 700px;
    border-radius: 1px solid;
    padding: 6px;
    max-width: 700px;
    float: left;
    margin: 20px 0px;

}

button{
    margin: 30px 10px;
}
</style>