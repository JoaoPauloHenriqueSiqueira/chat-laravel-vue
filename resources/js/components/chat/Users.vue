<template>
    <div>
        <h3>{{users.length}} online</h3>
        <div class="users scroll">
            <div class="user" v-for="user in 10" :key="user">
                <div class="user-img">
                    <img src="imgs/no-img.png" />
                </div>
                <strong>Nome</strong>
            </div>
        </div>
    </div>
</template>


<script>
export default ({
    props: ['asset'],
    computed: {
        users() {
            return [];
        }
    },
    mounted() {
        console.log(this.asset);
    },

    methods: {
        getPhoto() {}
    }
})
</script>

<style scoped>
.users {
    float: left;
    width: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    height:400px;
    max-height:400px;
}

.user {
    float: left;
    width: 100%;
    margin: 10px 0;
}

.user strong {
    float: left;
    margin: 9px 4px;
}

.user-img {
    float: left;
}

.user-img img {
    max-width: 40px;
    border: 1px solid #fff;
    border-radius: 100%;
}
</style>