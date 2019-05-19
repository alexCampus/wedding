<template>
    <div>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" v-if="select > 0">
            <div v-for="numPar in select">
                <h3 v-if="typeof par === 'undefined' ">Accompagnant {{numPar}}</h3>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Nom</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" v-model="participant.name[numPar]" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-md-4 control-label">Prénom</label>

                    <div class="col-md-6">
                        <input id="firstname" type="text" class="form-control" name="firstname" v-model="participant.firstname[numPar]" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-md-4 control-label">Age</label>

                    <div class="col-md-6">
                        <input id="age" type="number" class="form-control" name="age" v-model="participant.age[numPar]" required autofocus min="0">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Valider
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: 'Form',
        props: ['select', 'user_id', 'par'],
        data() {
            return {
                participant: {
                    name: [],
                    firstname: [],
                    age: []
                }
            };
        },
        methods: {
            onSubmit: function(submitEvent) {
                let data = [];
                for (let i = 1; i <= this.select; i++) {
                    data.push({
                        id: typeof this.par !== 'undefined' ? this.par.id : null,
                        name: this.participant.name[i],
                        firstname: this.participant.firstname[i],
                        age: this.participant.age[i],
                        user_id: this.user_id
                    });
                }
                axios.post('api/subscribe', data).then((response) => {
                    if (response.data) {
                        this.$emit('insertOk', true);
                        if (typeof this.par !== 'undefined') {
                            this.$emit('updateOk', data[0]);
                        }
                    }
                });
            }
        },
        created() {
            if (this.par) {
                this.participant.name[1] = this.par.name;
                this.participant.firstname[1] = this.par.firstname;
                this.participant.age[1] = this.par.age;
            }

        }
    };
</script>

