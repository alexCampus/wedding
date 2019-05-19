<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Liste des personnes y compris vous</label>
                    </div>
                    <div class="panel-body" v-for="par in participants">
                        <span class="glyphicon glyphicon-remove pull-right" aria-hidden="true" id="removeGly" v-on:click="deletePar(par.id)"
                              v-if="typeof par.firstname !== 'undefined'"></span>
                        <span class="glyphicon glyphicon-pencil pull-right" aria-hidden="true" id="pencylGly" v-on:click="updatePar(par)"
                              v-if="typeof par.firstname !== 'undefined'"></span>
                        <div class="list-group">
                            <h3 class="list-group-item-heading">{{par.firstname | capitalize}} {{par.name | capitalize}} <i>({{par.age}} ans) </i></h3>
                            <Form :select="selected" :user_id='user_id' v-if="update === par.id" :par="par" @updateOk="submitForm"></Form>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


    import Form from './Form';

    export default {
        name: 'List',
        components: { Form },
        props: ['user_id', 'participants'],
        data() {
            return {
                update: true,
                selected: 0,
                part: ''
            };
        },
        filters: {
            capitalize: function(value) {
                if (!value) {
                    return '';
                }
                let returnVal = '';
                value = value.toString().toLowerCase();
                value = value.split(' ');
                value.forEach(el => {
                    returnVal += el.charAt(0).toUpperCase() + el.slice(1) + ' ';
                });

                return returnVal;
            }
        },
        methods: {
            deletePar(id) {
                let confirma = confirm('Etes vous sur de vouloir supprimer cet(te) invité(e) ? ');

                if (confirma) {
                    axios.post('/api/deletePar/' + id, { token: 'wedding2019%24Olive%25Mari' }).then((response) => {
                        if (response.data) {
                            for (let [key, par] of Object.entries(this.participants)) {
                                if (par.id === parseInt(id)) {
                                    this.participants.splice(key, 1);
                                }
                            }
                        }
                    });
                }
            },
            updatePar(par) {
                if (this.update === par.id) {
                    this.update = null;
                    this.selected = 0;
                } else {
                    this.selected = 1;
                    this.update = par.id;
                }
            },
            submitForm(val) {
                if (typeof val !== 'undefined') {
                    this.update = null;
                    this.selected = 0;
                    this.$emit('upPart', val);
                }
            }
        }
    };
</script>

<style scoped>
    #removeGly {
        margin-left: 2%;
    }

    #removeGly:hover {
        color: red;
    }

    #pencylGly:hover {
        color: #7da8c3;
    }

    .pull-right {
        cursor: pointer;
    }

    .panel-heading {
        text-align: center;
    }
</style>