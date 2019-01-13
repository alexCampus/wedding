<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Liste des personnes vous accompagnant </label>
                    </div>
                    <div class="panel-body" v-for="par in participants">
                        <span class="glyphicon glyphicon-remove pull-right" aria-hidden="true" id="removeGly"></span>
                        <span class="glyphicon glyphicon-pencil pull-right" aria-hidden="true" id="pencylGly"></span>
                        <div class="list-group">
                            <h3 class="list-group-item-heading">{{par.firstname}} {{par.name}} <i>({{par.age}} ans) </i></h3>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


    export default {
        name: 'List',
        props: ['user_id', 'participants'],
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