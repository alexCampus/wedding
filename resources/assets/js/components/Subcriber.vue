<template>
    <div>
        <List :user_id='userId' :participants='participants' v-if='participants.length > 0'></List>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Nombre de personnes vous accompagnant
                            <select v-model.number="selected">
                                <option disabled value="">Choisissez</option>
                                <option v-for="number in numbers" :value="number">{{number}}</option>
                            </select>
                        </label>
                    </div>
                    <div class="panel-body">
                        <Form :select="selected" :user_id='userId' v-if="selected !== ''" @insertOk="submitForm"></Form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Form from './Form';
    import List from './List';
    import axios from 'axios';

    export default {
        name: 'Subcriber',
        components: { List, Form },
        props: ['select', 'userId'],
        data() {
            return {
                selected: '',
                numbers: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                participants: 0,
                route: '',
            };
        },
        created() {
            this.getParticipants();
        },
        methods: {
            submitForm(val) {
                if (val) {
                    this.selected = '';
                    this.getParticipants();
                }
            },
            getParticipants() {
                let self = this;
                axios.get('api/participant/get/' + self.userId).then(function(response) {
                    self.participants = response.data;
                });
            },
        },

        mounted() {
            this.route = window.location.href.split('/').pop();
            console.log('Component mounted.', this.route);
        },
    };
</script>

<style scoped>

</style>