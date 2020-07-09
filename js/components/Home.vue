<template>
    <div>
        <h1>WordPress Plugin Vue Rest</h1>
        <a href="https://github.com/tvqqq/wordpress-plugin-vue-rest" target="_blank">https://github.com/tvqqq/wordpress-plugin-vue-rest</a>
    </div>
</template>

<script>
    export default {
        name: "Home",
        created() {
            axios({
                method: 'GET',
                url: '/home',
            }).then(response => {
                this.data = response.data.data;
                this.makeToast(this.data);
            });
        }
    }
</script>
