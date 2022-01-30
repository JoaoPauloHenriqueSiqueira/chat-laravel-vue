<template>
    <div class="chat-message">
        <div class="chat-info">
            <b>{{ message.user.name }} </b>
            <span> {{ message.created_at }} </span>
        </div>
        <div class="chat-img">
            <img src="http://localhost/theboss-vue2/public/imgs/no-img.png">
        </div>
        <div :class="['message', {'owner': message.owner}]">
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
    float: left;
    width: 100%;
    margin: 10px 0;
}

.chat-info {
    float: left;
    width: 100%;
}

.chat-info span {
    float: right;
}

.chat-img {
    float: left;
}

.chat-img img {
    max-width: 60px;
    border-radius: 100%;
    border: 1px solid #FFF;
}

.message {
    background: #fff;
    float: left;
    padding: 8px;
    border-radius: 4px;
    position: relative;
    margin: 10px 14px 0 8px;
    width: fit-content;
}

.message:before {
    position: absolute;
    right: 100%;
    top: 15px;
    border: solid transparent;
    border-right-color: #ffff;
    content: ' ';
    height: 0;
    width: 0;
    pointer-events: none;
    border-width: 6px;
    margin-top: -8px;
}

.message.owner {
    background: #dcf8c6;
}

.message.owner:before {
    border-right-color: #dcf8c6;
}
</style>
