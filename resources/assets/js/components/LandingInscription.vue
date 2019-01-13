<template>
    <div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="1"
         style="background-image: url('/images/cover_bg_1.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src='images/flaticon/svg/005-two.svg' class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Tu es invité</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Si tu veux venir à Aydat pour manger, boire, donner de l’argent aux mariés, leur faire des câlins,
                                    leur dire qu’ils font une erreur ou au contraire
                                    qu’ils ont bien raison, bref si tu veux avoir ta place inscris toi en entrant ton adresse mail.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-inline" v-on:submit.prevent="submit">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Nom</label>
                                <input v-model="name" type="text" class="form-control" id="name" placeholder="Nom" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input v-model="email" type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Je participe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'LandingInscription',
        data() {
            return {
                email: '',
                name: '',
            };
        },
        methods: {
            submit() {
                console.log(this.name);
                console.log(this.email);
            },
        },
    };
</script>

<style scoped>

</style>