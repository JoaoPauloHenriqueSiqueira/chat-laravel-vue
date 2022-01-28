<template>
    <div class="chat-message">
        <div class="chat-info">
            {{ message.created_at }} - {{ message.user.name }}
        </div>
        <div class="chat-img">
            <img src="http://localhost/theboss-vue2/public/imgs/no-img.png">
        </div>
        <div class="message">
            {{ message.body }}
        </div>
    </div>
</template>

<script>
export default ({
    props: ['message'],
    methods: {
        getAvatar(avatar) {
            return "" + avatar;
        },
    }
})
</script>

<style scoped>
.chat-mesage {
    float:left;
    width:100%;
    margin:10px 0;
}

.chat-info {}

.chat-img {
    float:left;
}

.chat-img img {
    max-width: 60px;
    border-radius: 100%;
    border: 1px solid #FFF;
}

.message {
    background:#fff;
    padding:6px;
    border-radius: 5px;
    position:relative;
    margin:32px 14px 0 76px;
    

}
</style>
