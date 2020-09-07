/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

new Vue({
    el: '#app',
    data: {
        questions: false,
        filter: false,
        step: 0,
        session: {
            is_mother: false,
            is_entrepreneur: false,
            people: {},
            in_cnpj:'069.905.90/0001-23',
            business: {},
            in_cep: '29164-510',
            location: {},
            filters: {
                area: 1,
                support: [],
                hours: 1,
                study: []
            }
        }
    },
    methods: {
        openQuestions: function () {
            this.questions = true;
        },
        closeQuestions: function () {
            this.questions = false;
        },
        closeResult: function(){
            this.filter = false;
        },
        askStep: function(){
            var self = this;

            switch (self.step) {
                case 1:
                    axios.get('/api/people').then(function (response) {
                        var json = response.data;
                        self.session.people = json;
                        self.nextStep();
                    });
                    break;
        
                case 2:
                    var cep = self.session.in_cep.replace(/-/, '');
                    axios.get('/api/location/' + cep).then(function(response){
                        var json = response.data;
                        self.session.location = json;
                        self.nextStep();
                    });
                    break;
        
                case 4:
                    var cnpj = self.session.in_cnpj.replace(/[\.\/\-]/g, '');
                    axios.get('/api/company/' + cnpj).then(function (response) {
                        var json = response.data;
                        self.session.business = json;
                        self.nextStep();
                    });
                    break;
        
                case 7:
                    //Enviar dados via POST
                    self.finishStep();
                    break;
            }
        },
        nextStep: function(){
            this.step++;

            if(this.business){
                if(typeof this.business.cnpj !== "undefined"){
                    this.is_entrepreneur = true;
                }
            }

            if(!this.session.is_mother){
                this.session.filters.hours = 3;
            } else {
                this.session.filters.hours = 1;
            }
        },
        finishStep: function(){
            this.filter = true;
            this.questions = false; 
        }
    }
});

document.body.style.display = 'block';