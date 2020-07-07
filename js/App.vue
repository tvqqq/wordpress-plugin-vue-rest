<template>
    <div class="py-3 pr-3">
        <div class="d-flex align-items-baseline mb-2">
            <h2><b-icon-app-indicator></b-icon-app-indicator> WPVR</h2>
            <small class="ml-2">Powered by TVQ - quyen@tvqhub.com</small>
        </div>
        <div class="row">
            <div class="col-2">
                <b-list-group>
                    <b-list-group-item :to="{name: 'home'}" :class="{'active': isRoute('home')}">
                        <b-icon-heart-fill></b-icon-heart-fill>
                        Home
                    </b-list-group-item>
                </b-list-group>
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "App",
        methods: {
            isRoute(name) {
                return name === this.$route.name
            }
        }
    }
</script>

<style lang="scss">
    .card {
        margin-top: 0;
        padding: 0;
        max-width: 100%;
    }
</style>
