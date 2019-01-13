<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <label>
                            <select v-model="selected">
                                <option disabled value="">Choisissez</option>
                                <option>Test 1</option>
                                <option>Test 4</option>
                                <option>Test 9</option>
                                <option>Test 5</option>
                                <option>Test 3</option>
                            </select>
                        </label>
                        <p>{{selected}}</p>
                        I'm an example vuygjgg
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                selected: '',
            };
        },

        mounted() {
            console.log('Component mounted.');
        },
    };
</script>
