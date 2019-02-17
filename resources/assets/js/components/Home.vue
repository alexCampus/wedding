<template>
    <div class="container">
        <div v-if="route  === 'inscription'">

            <Subcriber :userId='userId'></Subcriber>
        </div>
        <div v-else>
            <landing-inscription></landing-inscription>
        </div>

    </div>
</template>

<script>
    import LandingInscription from './LandingInscription';
    import Subcriber from './Subcriber';

    export default {
        components: { Subcriber, LandingInscription },
        props: ['userId'],
        data() {
            return {
                route: '',
            };
        },
        mounted() {
            this.route = window.location.href.split('/').pop();
            console.log('Component mounted.', this.userId);
        },

    };
</script>
<style scoped>
    .panel-heading {
        text-align: center;
    }

    select {
        margin-left: 2%;
    }
</style>